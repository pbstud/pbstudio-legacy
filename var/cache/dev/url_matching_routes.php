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
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:256)'
                    .'|([A-z0-9_-]*)/(.+)(*:282)'
                .')'
                .'|/backend/(?'
                    .'|branchoffice/([^/]++)/edit(*:329)'
                    .'|coupon/([^/]++)(?'
                        .'|(*:355)'
                        .'|/edit(*:368)'
                    .')'
                    .'|discipline/([^/]++)/edit(*:401)'
                    .'|exerciseroom/([^/]++)/edit(*:435)'
                    .'|instructor/([^/]++)(?'
                        .'|/edit(*:470)'
                        .'|(*:478)'
                    .')'
                    .'|pa(?'
                        .'|ckage/([^/]++)/edit(*:511)'
                        .'|ge/([^/]++)(?'
                            .'|/edit(*:538)'
                            .'|(*:546)'
                        .')'
                    .')'
                .')'
                .'|/([^/]++)/attended(*:575)'
                .'|/backend/(?'
                    .'|s(?'
                        .'|ession(?'
                            .'|/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:628)'
                                    .'|reservations(*:648)'
                                    .'|waitinglist(*:667)'
                                    .'|places(*:681)'
                                .')'
                                .'|(*:690)'
                            .')'
                            .'|\\-day/edit/([^/]++)/([^/]++)(*:727)'
                        .')'
                        .'|taff/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:760)'
                                .'|password(*:776)'
                            .')'
                            .'|(*:785)'
                        .')'
                    .')'
                    .'|transaction/([^/]++)(?'
                        .'|(*:818)'
                        .'|/(?'
                            .'|cancel(*:836)'
                            .'|edit\\-expiration(*:860)'
                        .')'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:886)'
                        .'|/(?'
                            .'|edit(*:902)'
                            .'|rese(?'
                                .'|t\\-password(*:928)'
                                .'|rvations(?'
                                    .'|(*:947)'
                                    .'|/(?'
                                        .'|new(*:962)'
                                        .'|([^/]++)(?'
                                            .'|(*:981)'
                                            .'|/cancel(*:996)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|stats(*:1013)'
                            .'|transactions(*:1034)'
                        .')'
                    .')'
                .')'
                .'|/coupon/([^/]++)/validate(*:1071)'
                .'|/p(?'
                    .'|aquete/([^/]++)/comprar(*:1108)'
                    .'|/([^/]++)(*:1126)'
                .')'
                .'|/mi\\-cuenta/(?'
                    .'|reservacion/([^/]++)/ca(?'
                        .'|ncelar(*:1183)'
                        .'|mbiar(?'
                            .'|(*:1200)'
                            .'|/([^/]++)(*:1218)'
                        .')'
                    .')'
                    .'|waiting\\-list/([^/]++)/remove(*:1258)'
                .')'
                .'|/res(?'
                    .'|erva(?'
                        .'|r\\-clase(?:/([^/]++))?(*:1304)'
                        .'|cion\\-clase/([^/]++)(*:1333)'
                    .')'
                    .'|tablecer/([^/]++)(*:1360)'
                .')'
                .'|/lista\\-de\\-espera/([^/]++)(*:1397)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        256 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        329 => [[['_route' => 'backend_branchoffice_edit', '_controller' => 'App\\Controller\\Backend\\BranchOfficeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        355 => [[['_route' => 'backend_coupon_show', '_controller' => 'App\\Controller\\Backend\\CouponController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        368 => [[['_route' => 'backend_coupon_edit', '_controller' => 'App\\Controller\\Backend\\CouponController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        401 => [[['_route' => 'backend_discipline_edit', '_controller' => 'App\\Controller\\Backend\\DisciplineController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        435 => [[['_route' => 'backend_exerciseroom_edit', '_controller' => 'App\\Controller\\Backend\\ExerciseRoomController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        470 => [[['_route' => 'backend_instructor_edit', '_controller' => 'App\\Controller\\Backend\\InstructorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        478 => [[['_route' => 'backend_instructor_delete', '_controller' => 'App\\Controller\\Backend\\InstructorController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        511 => [[['_route' => 'backend_package_edit', '_controller' => 'App\\Controller\\Backend\\PackageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        538 => [[['_route' => 'backend_page_edit', '_controller' => 'App\\Controller\\Backend\\PageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        546 => [[['_route' => 'backend_page_delete', '_controller' => 'App\\Controller\\Backend\\PageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        575 => [[['_route' => 'backend_reservation_attended', '_controller' => 'App\\Controller\\Backend\\ReservationController::attended'], ['id'], ['POST' => 0], null, false, false, null]],
        628 => [[['_route' => 'backend_session_edit', '_controller' => 'App\\Controller\\Backend\\SessionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        648 => [[['_route' => 'backend_session_reservations', '_controller' => 'App\\Controller\\Backend\\SessionController::reservations'], ['id'], ['GET' => 0], null, false, false, null]],
        667 => [[['_route' => 'backend_session_waitinglist', '_controller' => 'App\\Controller\\Backend\\SessionController::waitingList'], ['id'], ['GET' => 0], null, false, false, null]],
        681 => [[['_route' => 'backend_session_places', '_controller' => 'App\\Controller\\Backend\\SessionController::places'], ['id'], ['GET' => 0], null, false, false, null]],
        690 => [[['_route' => 'backend_session_cancel', '_controller' => 'App\\Controller\\Backend\\SessionController::cancel'], ['id'], ['POST' => 0], null, false, true, null]],
        727 => [[['_route' => 'backend_session_day_edit', '_controller' => 'App\\Controller\\Backend\\SessionDayController::editDay'], ['editDate', 'branchOfficeId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        760 => [[['_route' => 'backend_staff_edit', '_controller' => 'App\\Controller\\Backend\\StaffController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        776 => [[['_route' => 'backend_staff_password', '_controller' => 'App\\Controller\\Backend\\StaffController::password'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        785 => [[['_route' => 'backend_staff_delete', '_controller' => 'App\\Controller\\Backend\\StaffController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        818 => [[['_route' => 'backend_transaction_show', '_controller' => 'App\\Controller\\Backend\\TransactionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        836 => [[['_route' => 'backend_transaction_cancel', '_controller' => 'App\\Controller\\Backend\\TransactionController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        860 => [[['_route' => 'backend_transaction_edit_expiration', '_controller' => 'App\\Controller\\Backend\\TransactionController::editExpiration'], ['id'], ['POST' => 0], null, false, false, null]],
        886 => [
            [['_route' => 'backend_user_show', '_controller' => 'App\\Controller\\Backend\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'backend_user_toggle_enable', '_controller' => 'App\\Controller\\Backend\\UserController::toggleEnable'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        902 => [[['_route' => 'backend_user_edit', '_controller' => 'App\\Controller\\Backend\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        928 => [[['_route' => 'backend_user_reset_password', '_controller' => 'App\\Controller\\Backend\\UserController::resetPassword'], ['id'], ['POST' => 0], null, false, false, null]],
        947 => [[['_route' => 'backend_user_reservations', '_controller' => 'App\\Controller\\Backend\\UserController::reservations'], ['id'], ['GET' => 0], null, false, false, null]],
        962 => [[['_route' => 'backend_user_reservation_new', '_controller' => 'App\\Controller\\Backend\\UserController::reservationNew'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        981 => [[['_route' => 'backend_user_reservation_detail', '_controller' => 'App\\Controller\\Backend\\UserController::reservationDetail'], ['id', 'reservation'], ['GET' => 0], null, false, true, null]],
        996 => [[['_route' => 'backend_user_reservation_cancel', '_controller' => 'App\\Controller\\Backend\\UserController::reservationCancel'], ['id', 'reservation'], ['POST' => 0], null, false, false, null]],
        1013 => [[['_route' => 'backend_user_stats', '_controller' => 'App\\Controller\\Backend\\UserController::stats'], ['id'], ['GET' => 0], null, false, false, null]],
        1034 => [[['_route' => 'backend_user_transactions', '_controller' => 'App\\Controller\\Backend\\UserController::transactions'], ['id'], ['GET' => 0], null, false, false, null]],
        1071 => [[['_route' => 'coupon_validate', '_controller' => 'App\\Controller\\CouponController::validate'], ['id'], null, null, false, false, null]],
        1108 => [[['_route' => 'package_checkout', '_controller' => 'App\\Controller\\PackageController::checkout'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1126 => [[['_route' => 'page', '_controller' => 'App\\Controller\\PageController::index'], ['slug'], null, null, false, true, null]],
        1183 => [[['_route' => 'reservation_cancel', '_controller' => 'App\\Controller\\ProfileController::reservationCancel'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1200 => [[['_route' => 'reservation_change', '_controller' => 'App\\Controller\\ProfileController::reservationChange'], ['id'], ['GET' => 0], null, false, false, null]],
        1218 => [[['_route' => 'reservation_change_session', '_controller' => 'App\\Controller\\ProfileController::reservationChangeSession'], ['id', 'sessionId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1258 => [[['_route' => 'waiting_list_remove', '_controller' => 'App\\Controller\\ProfileController::waitingListRemove'], ['sessionId'], ['POST' => 0], null, false, false, null]],
        1304 => [[['_route' => 'reservation_calendar', 'slug' => null, '_controller' => 'App\\Controller\\ReservationController::calendar'], ['slug'], null, null, false, true, null]],
        1333 => [[['_route' => 'reservation_confirm', '_controller' => 'App\\Controller\\ReservationController::confirm'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1360 => [[['_route' => 'resetting_reset', '_controller' => 'App\\Controller\\ResettingController::reset'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1397 => [
            [['_route' => 'reservation_waitinglist', '_controller' => 'App\\Controller\\ReservationController::waitingList'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
