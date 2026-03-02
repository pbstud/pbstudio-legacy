<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/logout' => [
            [['_route' => '_logout_main'], null, null, null, false, false, null],
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
        ],
        '/backend/branchoffice' => [[['_route' => 'backend_branchoffice', '_controller' => 'App\\Controller\\Backend\\BranchOfficeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backend/branchoffice/new' => [[['_route' => 'backend_branchoffice_new', '_controller' => 'App\\Controller\\Backend\\BranchOfficeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backend/settings' => [[['_route' => 'backend_configuration', '_controller' => 'App\\Controller\\Backend\\ConfigurationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backend/settings/update' => [[['_route' => 'backend_configuration_update', '_controller' => 'App\\Controller\\Backend\\ConfigurationController::update'], null, ['PUT' => 0], null, false, false, null]],
        '/backend/coupon' => [[['_route' => 'backend_coupon', '_controller' => 'App\\Controller\\Backend\\CouponController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backend/coupon/new' => [[['_route' => 'backend_coupon_new', '_controller' => 'App\\Controller\\Backend\\CouponController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backend/coupon/validate' => [[['_route' => 'backend_coupon_validate', '_controller' => 'App\\Controller\\Backend\\CouponController::validate'], null, ['GET' => 0], null, false, false, null]],
        '/backend' => [[['_route' => 'backend_dashboard', '_controller' => 'App\\Controller\\Backend\\DashboardController::index'], null, null, null, false, false, null]],
        '/backend/test' => [[['_route' => 'backend_dashboard_test', '_controller' => 'App\\Controller\\Backend\\DashboardController::backTest'], null, null, null, false, false, null]],
        '/backend/discipline' => [[['_route' => 'backend_discipline', '_controller' => 'App\\Controller\\Backend\\DisciplineController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backend/discipline/new' => [[['_route' => 'backend_discipline_new', '_controller' => 'App\\Controller\\Backend\\DisciplineController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backend/exerciseroom' => [[['_route' => 'backend_exerciseroom', '_controller' => 'App\\Controller\\Backend\\ExerciseRoomController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backend/exerciseroom/new' => [[['_route' => 'backend_exerciseroom_new', '_controller' => 'App\\Controller\\Backend\\ExerciseRoomController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backend/instructor' => [[['_route' => 'backend_instructor', '_controller' => 'App\\Controller\\Backend\\InstructorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backend/instructor/new' => [[['_route' => 'backend_instructor_new', '_controller' => 'App\\Controller\\Backend\\InstructorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backend/package' => [[['_route' => 'backend_package', '_controller' => 'App\\Controller\\Backend\\PackageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backend/package/new' => [[['_route' => 'backend_package_new', '_controller' => 'App\\Controller\\Backend\\PackageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backend/page' => [[['_route' => 'backend_page', '_controller' => 'App\\Controller\\Backend\\PageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backend/page/new' => [[['_route' => 'backend_page_new', '_controller' => 'App\\Controller\\Backend\\PageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backend/login' => [[['_route' => 'backend_login', '_controller' => 'App\\Controller\\Backend\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backend/logout' => [[['_route' => 'backend_logout', '_controller' => 'App\\Controller\\Backend\\SecurityController::logout'], null, null, null, false, false, null]],
        '/backend/session/get' => [[['_route' => 'backend_session_get', '_controller' => 'App\\Controller\\Backend\\SessionController::getJson'], null, ['GET' => 0], null, false, false, null]],
        '/backend/session' => [[['_route' => 'backend_session', '_controller' => 'App\\Controller\\Backend\\SessionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backend/session/new' => [[['_route' => 'backend_session_new', '_controller' => 'App\\Controller\\Backend\\SessionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backend/session-day' => [[['_route' => 'backend_session_day', '_controller' => 'App\\Controller\\Backend\\SessionDayController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backend/session-day/new-branch-office' => [[['_route' => 'backend_session_day_new_branch_office', '_controller' => 'App\\Controller\\Backend\\SessionDayController::newBranchOffice'], null, ['GET' => 0], null, false, false, null]],
        '/backend/session-day/new' => [[['_route' => 'backend_session_day_new', '_controller' => 'App\\Controller\\Backend\\SessionDayController::newDay'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backend/staff' => [[['_route' => 'backend_staff', '_controller' => 'App\\Controller\\Backend\\StaffController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backend/staff/new' => [[['_route' => 'backend_staff_new', '_controller' => 'App\\Controller\\Backend\\StaffController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backend/stats' => [[['_route' => 'backend_stats', '_controller' => 'App\\Controller\\Backend\\StatsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backend/transaction' => [[['_route' => 'backend_transaction', '_controller' => 'App\\Controller\\Backend\\TransactionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backend/transaction/new' => [[['_route' => 'backend_transaction_new', '_controller' => 'App\\Controller\\Backend\\TransactionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backend/user' => [[['_route' => 'backend_user', '_controller' => 'App\\Controller\\Backend\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/backend/user/new' => [[['_route' => 'backend_user_new', '_controller' => 'App\\Controller\\Backend\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/backend/user/export' => [[['_route' => 'backend_user_export', '_controller' => 'App\\Controller\\Backend\\UserController::export'], null, ['GET' => 0], null, false, false, null]],
        '/checkout/success' => [[['_route' => 'checkout_success', '_controller' => 'App\\Controller\\CheckoutController::success'], null, null, null, false, false, null]],
        '/contacto' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contacto/enviar' => [[['_route' => 'contact_send', '_controller' => 'App\\Controller\\ContactController::send'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/paquetes' => [[['_route' => 'package_index', '_controller' => 'App\\Controller\\PackageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/mi-cuenta' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, ['GET' => 0], null, true, false, null]],
        '/mi-cuenta/clases-disponibles' => [[['_route' => 'sessions_available', '_controller' => 'App\\Controller\\ProfileController::sessionsAvailable'], null, ['GET' => 0], null, false, false, null]],
        '/mi-cuenta/clases-tomadas' => [[['_route' => 'sessions_used', '_controller' => 'App\\Controller\\ProfileController::sessionsUsed'], null, ['GET' => 0], null, false, false, null]],
        '/mi-cuenta/proximas-clases' => [[['_route' => 'reserved_sessions', '_controller' => 'App\\Controller\\ProfileController::reservedSessions'], null, ['GET' => 0], null, false, false, null]],
        '/mi-cuenta/lista-espera' => [[['_route' => 'profile_waiting_list', '_controller' => 'App\\Controller\\ProfileController::waitingList'], null, ['GET' => 0], null, false, false, null]],
        '/mi-cuenta/editar' => [[['_route' => 'profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mi-cuenta/transaccion' => [[['_route' => 'transaction', '_controller' => 'App\\Controller\\ProfileController::transaction'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/restablecer/solicitud' => [[['_route' => 'resetting_request', '_controller' => 'App\\Controller\\ResettingController::request'], null, ['GET' => 0], null, false, false, null]],
        '/restablecer/send-email' => [[['_route' => 'resetting_send_email', '_controller' => 'App\\Controller\\ResettingController::sendEmail'], null, ['POST' => 0], null, false, false, null]],
        '/restablecer/check-email' => [[['_route' => 'resetting_check_email', '_controller' => 'App\\Controller\\ResettingController::checkEmail'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/instructores' => [[['_route' => 'instructors', '_controller' => 'App\\Controller\\StaffController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:61)'
                    .'|([A-z0-9_-]*)/(.+)(*:86)'
                .')'
                .'|/backend/(?'
                    .'|branchoffice/([^/]++)/edit(*:132)'
                    .'|coupon/([^/]++)(?'
                        .'|(*:158)'
                        .'|/edit(*:171)'
                    .')'
                    .'|discipline/([^/]++)/edit(*:204)'
                    .'|exerciseroom/([^/]++)/edit(*:238)'
                    .'|instructor/([^/]++)(?'
                        .'|/edit(*:273)'
                        .'|(*:281)'
                    .')'
                    .'|pa(?'
                        .'|ckage/([^/]++)/edit(*:314)'
                        .'|ge/([^/]++)(?'
                            .'|/edit(*:341)'
                            .'|(*:349)'
                        .')'
                    .')'
                .')'
                .'|/([^/]++)/attended(*:378)'
                .'|/backend/(?'
                    .'|s(?'
                        .'|ession(?'
                            .'|/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:431)'
                                    .'|reservations(*:451)'
                                    .'|waitinglist(*:470)'
                                    .'|places(*:484)'
                                .')'
                                .'|(*:493)'
                            .')'
                            .'|\\-day/edit/([^/]++)/([^/]++)(*:530)'
                        .')'
                        .'|taff/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:563)'
                                .'|password(*:579)'
                            .')'
                            .'|(*:588)'
                        .')'
                    .')'
                    .'|transaction/([^/]++)(?'
                        .'|(*:621)'
                        .'|/(?'
                            .'|cancel(*:639)'
                            .'|edit\\-expiration(*:663)'
                        .')'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:689)'
                        .'|/(?'
                            .'|edit(*:705)'
                            .'|rese(?'
                                .'|t\\-password(*:731)'
                                .'|rvations(?'
                                    .'|(*:750)'
                                    .'|/(?'
                                        .'|new(*:765)'
                                        .'|([^/]++)(?'
                                            .'|(*:784)'
                                            .'|/cancel(*:799)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|stats(*:816)'
                            .'|transactions(*:836)'
                        .')'
                    .')'
                .')'
                .'|/coupon/([^/]++)/validate(*:872)'
                .'|/p(?'
                    .'|aquete/([^/]++)/comprar(*:908)'
                    .'|/([^/]++)(*:925)'
                .')'
                .'|/mi\\-cuenta/(?'
                    .'|reservacion/([^/]++)/ca(?'
                        .'|ncelar(*:981)'
                        .'|mbiar(?'
                            .'|(*:997)'
                            .'|/([^/]++)(*:1014)'
                        .')'
                    .')'
                    .'|waiting\\-list/([^/]++)/remove(*:1054)'
                .')'
                .'|/res(?'
                    .'|erva(?'
                        .'|r\\-clase(?:/([^/]++))?(*:1100)'
                        .'|cion\\-clase/([^/]++)(*:1129)'
                    .')'
                    .'|tablecer/([^/]++)(*:1156)'
                .')'
                .'|/lista\\-de\\-espera/([^/]++)(*:1193)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        61 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        86 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        132 => [[['_route' => 'backend_branchoffice_edit', '_controller' => 'App\\Controller\\Backend\\BranchOfficeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        158 => [[['_route' => 'backend_coupon_show', '_controller' => 'App\\Controller\\Backend\\CouponController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        171 => [[['_route' => 'backend_coupon_edit', '_controller' => 'App\\Controller\\Backend\\CouponController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        204 => [[['_route' => 'backend_discipline_edit', '_controller' => 'App\\Controller\\Backend\\DisciplineController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        238 => [[['_route' => 'backend_exerciseroom_edit', '_controller' => 'App\\Controller\\Backend\\ExerciseRoomController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        273 => [[['_route' => 'backend_instructor_edit', '_controller' => 'App\\Controller\\Backend\\InstructorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        281 => [[['_route' => 'backend_instructor_delete', '_controller' => 'App\\Controller\\Backend\\InstructorController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        314 => [[['_route' => 'backend_package_edit', '_controller' => 'App\\Controller\\Backend\\PackageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        341 => [[['_route' => 'backend_page_edit', '_controller' => 'App\\Controller\\Backend\\PageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        349 => [[['_route' => 'backend_page_delete', '_controller' => 'App\\Controller\\Backend\\PageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        378 => [[['_route' => 'backend_reservation_attended', '_controller' => 'App\\Controller\\Backend\\ReservationController::attended'], ['id'], ['POST' => 0], null, false, false, null]],
        431 => [[['_route' => 'backend_session_edit', '_controller' => 'App\\Controller\\Backend\\SessionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        451 => [[['_route' => 'backend_session_reservations', '_controller' => 'App\\Controller\\Backend\\SessionController::reservations'], ['id'], ['GET' => 0], null, false, false, null]],
        470 => [[['_route' => 'backend_session_waitinglist', '_controller' => 'App\\Controller\\Backend\\SessionController::waitingList'], ['id'], ['GET' => 0], null, false, false, null]],
        484 => [[['_route' => 'backend_session_places', '_controller' => 'App\\Controller\\Backend\\SessionController::places'], ['id'], ['GET' => 0], null, false, false, null]],
        493 => [[['_route' => 'backend_session_cancel', '_controller' => 'App\\Controller\\Backend\\SessionController::cancel'], ['id'], ['POST' => 0], null, false, true, null]],
        530 => [[['_route' => 'backend_session_day_edit', '_controller' => 'App\\Controller\\Backend\\SessionDayController::editDay'], ['editDate', 'branchOfficeId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        563 => [[['_route' => 'backend_staff_edit', '_controller' => 'App\\Controller\\Backend\\StaffController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        579 => [[['_route' => 'backend_staff_password', '_controller' => 'App\\Controller\\Backend\\StaffController::password'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        588 => [[['_route' => 'backend_staff_delete', '_controller' => 'App\\Controller\\Backend\\StaffController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        621 => [[['_route' => 'backend_transaction_show', '_controller' => 'App\\Controller\\Backend\\TransactionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        639 => [[['_route' => 'backend_transaction_cancel', '_controller' => 'App\\Controller\\Backend\\TransactionController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        663 => [[['_route' => 'backend_transaction_edit_expiration', '_controller' => 'App\\Controller\\Backend\\TransactionController::editExpiration'], ['id'], ['POST' => 0], null, false, false, null]],
        689 => [
            [['_route' => 'backend_user_show', '_controller' => 'App\\Controller\\Backend\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'backend_user_toggle_enable', '_controller' => 'App\\Controller\\Backend\\UserController::toggleEnable'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        705 => [[['_route' => 'backend_user_edit', '_controller' => 'App\\Controller\\Backend\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        731 => [[['_route' => 'backend_user_reset_password', '_controller' => 'App\\Controller\\Backend\\UserController::resetPassword'], ['id'], ['GET' => 0], null, false, false, null]],
        750 => [[['_route' => 'backend_user_reservations', '_controller' => 'App\\Controller\\Backend\\UserController::reservations'], ['id'], ['GET' => 0], null, false, false, null]],
        765 => [[['_route' => 'backend_user_reservation_new', '_controller' => 'App\\Controller\\Backend\\UserController::reservationNew'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        784 => [[['_route' => 'backend_user_reservation_detail', '_controller' => 'App\\Controller\\Backend\\UserController::reservationDetail'], ['id', 'reservation'], ['GET' => 0], null, false, true, null]],
        799 => [[['_route' => 'backend_user_reservation_cancel', '_controller' => 'App\\Controller\\Backend\\UserController::reservationCancel'], ['id', 'reservation'], ['POST' => 0], null, false, false, null]],
        816 => [[['_route' => 'backend_user_stats', '_controller' => 'App\\Controller\\Backend\\UserController::stats'], ['id'], ['GET' => 0], null, false, false, null]],
        836 => [[['_route' => 'backend_user_transactions', '_controller' => 'App\\Controller\\Backend\\UserController::transactions'], ['id'], ['GET' => 0], null, false, false, null]],
        872 => [[['_route' => 'coupon_validate', '_controller' => 'App\\Controller\\CouponController::validate'], ['id'], null, null, false, false, null]],
        908 => [[['_route' => 'package_checkout', '_controller' => 'App\\Controller\\PackageController::checkout'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        925 => [[['_route' => 'page', '_controller' => 'App\\Controller\\PageController::index'], ['slug'], null, null, false, true, null]],
        981 => [[['_route' => 'reservation_cancel', '_controller' => 'App\\Controller\\ProfileController::reservationCancel'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        997 => [[['_route' => 'reservation_change', '_controller' => 'App\\Controller\\ProfileController::reservationChange'], ['id'], ['GET' => 0], null, false, false, null]],
        1014 => [[['_route' => 'reservation_change_session', '_controller' => 'App\\Controller\\ProfileController::reservationChangeSession'], ['id', 'sessionId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1054 => [[['_route' => 'waiting_list_remove', '_controller' => 'App\\Controller\\ProfileController::waitingListRemove'], ['sessionId'], ['GET' => 0], null, false, false, null]],
        1100 => [[['_route' => 'reservation_calendar', 'slug' => null, '_controller' => 'App\\Controller\\ReservationController::calendar'], ['slug'], null, null, false, true, null]],
        1129 => [[['_route' => 'reservation_confirm', '_controller' => 'App\\Controller\\ReservationController::confirm'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1156 => [[['_route' => 'resetting_reset', '_controller' => 'App\\Controller\\ResettingController::reset'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1193 => [
            [['_route' => 'reservation_waitinglist', '_controller' => 'App\\Controller\\ReservationController::waitingList'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
