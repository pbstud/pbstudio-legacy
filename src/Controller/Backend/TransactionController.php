<?php

declare(strict_types=1);

namespace App\Controller\Backend;

use App\Entity\Package;
use App\Entity\Transaction;
use App\Entity\User;
use App\Event\TransactionEvent;
use App\Form\Backend\TransactionType;
use App\Model\TransactionModel;
use App\Repository\BranchOfficeRepository;
use App\Repository\PackageRepository;
use App\Repository\TransactionRepository;
use App\Service\Conekta\ConektaService;
use App\Service\CouponService;
use App\Service\TransactionService;
use App\Util\ChargeMethodDescription;
use App\Util\PackageSessionType;
use App\Util\TransactionStatusDescription;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ALLOWED_ROUTE_ACCESS')]
#[Route('/backend/transaction')]
class TransactionController extends AbstractController
{
    #[Route('/', name: 'backend_transaction', methods: ['GET'])]
    public function index(
        Request $request,
        PaginatorInterface $paginator,
        TransactionRepository $transactionRepository,
        BranchOfficeRepository $branchOfficeRepository,
        PackageRepository $packageRepository,
    ) {
        // Filters
        $currentDate = new \DateTime();

        $filters = [];
        $filters['filter_search'] = $request->query->get('filter_search');
        $filters['filter_status'] = $request->query->get('filter_status');
        $filters['filter_date_start'] = $request->query->get('filter_date_start', $currentDate->modify('FIRST DAY OF THIS MONTH')->format('d/m/Y'));
        $filters['filter_date_end'] = $request->query->get('filter_date_end', $currentDate->modify('LAST DAY OF THIS MONTH')->format('d/m/Y'));
        $filters['filter_branchOffice'] = $request->query->get('filter_branchOffice');
        $filters['filter_package'] = $request->query->get('filter_package');
        $filters['filter_charge_method'] = $request->query->get('filter_charge_method');
        $filters['filter_discount'] = $request->query->get('filter_discount');

        $transactions = $transactionRepository->findForBackendList($filters);

        // Export
        if ($request->query->has('export')) {
            return $this->export($transactions->getQuery()->getResult());
        }

        $pagination = $paginator->paginate(
            $transactions,
            $request->query->getInt('page', 1),
            Transaction::NUMBER_OF_ITEMS,
        );

        $urlExport = $this->generateUrl(
            'backend_transaction',
            $filters + ['export' => true]
        );

        $branchOffices = $branchOfficeRepository->findAll();
        $packages = $packageRepository->getAllActive();

        $filterDiscount = [
            Transaction::WITH_DISCOUNT,
            Transaction::WITHOUT_DISCOUNT,
        ];

        return $this->render('backend/transaction/index.html.twig', $filters + [
            'url_export' => $urlExport,
            'branchOffices' => $branchOffices,
            'pagination' => $pagination,
            'packages' => $packages,
            'chargeMethods' => Transaction::chargeMethodChoices(),
            'statusChoices' => Transaction::statusChoices(),
            'total' => $transactionRepository->getSumFilterList($filters),
            'filterDiscount' => $filterDiscount,
        ]);
    }

    #[Route('/new', name: 'backend_transaction_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        TransactionService $transactionService,
        CouponService $couponService,
        ConektaService $conekta,
        EventDispatcherInterface $dispatcher,
        EntityManagerInterface $em,
    ): Response {
        $transactionModel = new TransactionModel();
        $form = $this->createForm(TransactionType::class, $transactionModel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Package $package */
            $package = $transactionModel->getPackage();

            try {
                $em->beginTransaction();
                try {
                    $transaction = $transactionService->create(
                        $package,
                        $transactionModel->getChargeMethod(),
                        $transactionModel->getUser(),
                        $transactionModel->getBranchOffice(),
                        $transactionModel->getDiscount()
                    );
                    $em->persist($transaction);

                    if (Transaction::CHARGE_METHOD_FREE !== $transactionModel->getChargeMethod()) {
                        $couponService->apply($transaction, $transactionModel->getCoupon());
                    }

                    $em->flush();
                    $em->commit();
                } catch (\Exception $exception) {
                    $em->rollback();

                    throw $exception;
                }

                if (Transaction::CHARGE_METHOD_CARD === $transactionModel->getChargeMethod()) {
                    $transaction = $conekta->chargeCard($transaction, $request->request->get('conekta_card_token'));

                    if (Transaction::STATUS_PAID !== $transaction->getStatus()) {
                        throw new \Exception($transaction->getErrorMessage());
                    }
                } else {
                    $expirationAt = (new \DateTime())
                        ->add(new \DateInterval(sprintf('P%sD', $package->getDaysExpiry())))
                    ;

                    $transaction
                        ->setChargeAuthCode($transactionModel->getChargeAuthCode())
                        ->setCardLast4($transactionModel->getCardLast4())
                        ->setStatus(Transaction::STATUS_PAID)
                        ->setExpirationAt($expirationAt)
                        ->setHaveSessionsAvailable(true)
                    ;

                    $em->persist($transaction);
                    $em->flush();
                }

                $event = new TransactionEvent($transaction);
                $dispatcher->dispatch($event);

                $this->addFlash('success', 'La Transacción ha sido creada.');

                return $this->redirectToRoute('backend_transaction_new');
            } catch (\Exception $e) {
                $this->addFlash('danger', $e->getMessage());
            }
        }

        return $this->render('backend/transaction/new.html.twig', [
            'conekta_public_key' => $conekta->getPublicKey(),
            'form' => $form->createView(),
            'transactionModel' => $transactionModel,
        ]);
    }

    #[Route('/{id}', name: 'backend_transaction_show', methods: ['GET'])]
    public function show(Transaction $transaction): Response
    {
        return $this->render('backend/transaction/show.html.twig', [
            'transaction' => $transaction,
        ]);
    }

    #[Route('/{id}/cancel', name: 'backend_transaction_cancel', methods: ['POST'])]
    public function cancel(
        Transaction $transaction,
        ConektaService $conektaService,
        EntityManagerInterface $em,
    ): Response {
        $response = [];

        if ('payment.card' === $transaction->getChargeMethod()) {
            $response = $conektaService->chargeRefund($transaction);
        }

        if (!isset($response['error'])) {
            $transaction
                ->setStatus(Transaction::STATUS_CANCEL)
                ->setRefundedAt(new \DateTime())
            ;

            $em->flush();
        }

        return $this->json($response);
    }

    #[Route('/{id}/edit-expiration', name: 'backend_transaction_edit_expiration', methods: ['POST'])]
    public function editExpiration(Request $request, Transaction $transaction, EntityManagerInterface $em): Response
    {
        try {
            $expirationDate = \DateTime::createFromFormat('d/m/Y', $request->request->get('expiration_date'));

            if (!$expirationDate) {
                throw new \Exception('Fecha inválida');
            }

            $expirationDate->setTime(0, 0);
            $today = new \DateTime('today');

            if ($expirationDate < $today) {
                throw new \Exception('La fecha no puede ser menor a hoy.');
            }

            $transaction->setExpirationAt($expirationDate);
            $em->flush();

            $this->addFlash('success', 'La fecha de expiración ha sido actualizada.');
        } catch (\Exception $e) {
            $this->addFlash('danger', $e->getMessage());
        }

        return $this->redirectToRoute('backend_transaction_show', [
            'id' => $transaction->getId(),
        ]);
    }

    private function export(array $transactions): StreamedResponse
    {
        $response = new StreamedResponse();
        $response->setCallback(static function () use ($transactions) {
            $handle = fopen('php://output', 'w');

            fputs($handle, $bom = (chr(0xEF).chr(0xBB).chr(0xBF)));

            fputcsv($handle, [
                'ID',
                'Usuario',
                'Email',
                'Paquete',
                'Modalidad',
                'Monto',
                'Precio Especial',
                'Cupón Descuento',
                'Descuento Adicional',
                'Total',
                'Método de pago',
                'Tarjetahabiente',
                'Tarjeta',
                'Código de autorización',
                'Conekta ID',
                'Conekta error',
                'Sucursal',
                'Estado',
                'Expirada',
                'Fecha de Expiración',
                'Fecha de creación',
            ]);

            /** @var Transaction $transaction */
            foreach ($transactions as $transaction) {
                /** @var User $user */
                $user = $transaction->getUser();

                fputcsv($handle, [
                    $transaction->getId(),
                    $user->getName(),
                    $user->getEmail(),
                    sprintf('%s clase(s)', $transaction->getPackageTotalClasses()),
                    PackageSessionType::getDescription($transaction->getPackageType()),
                    $transaction->getPackageAmount(),
                    $transaction->getPackageSpecialPrice(),
                    $transaction->getCouponDiscount().'%',
                    $transaction->getDiscount().'%',
                    $transaction->getTotal(),
                    ChargeMethodDescription::getDescription($transaction->getChargeMethod()),
                    $transaction->getCardName(),
                    $transaction->getCardLast4(),
                    $transaction->getChargeAuthCode(),
                    $transaction->getChargeId(),
                    $transaction->getErrorMessage(),
                    $transaction->getBranchOffice(),
                    TransactionStatusDescription::getDescription($transaction->getStatus()),
                    $transaction->isIsExpired() ? 'Si' : 'No',
                    $transaction->getExpirationAt() ? $transaction->getExpirationAt()->format('d/m/Y H:i:s') : null,
                    $transaction->getCreatedAt()->format('d/m/Y H:i:s'),
                ]);
            }

            fclose($handle);
        });
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-Disposition', 'attachment; filename="transactions.csv"');

        return $response;
    }
}
