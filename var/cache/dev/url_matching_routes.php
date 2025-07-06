<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/appointment' => [[['_route' => 'admin_appointment_index', '_controller' => 'App\\Controller\\Admin\\AppointmentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/categories' => [[['_route' => 'admin_categorie_index', '_controller' => 'App\\Controller\\Admin\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/categories/new' => [[['_route' => 'admin_categorie_new', '_controller' => 'App\\Controller\\Admin\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/service' => [[['_route' => 'admin_service_index', '_controller' => 'App\\Controller\\Admin\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/service/new' => [[['_route' => 'admin_service_new', '_controller' => 'App\\Controller\\Admin\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/appointments' => [[['_route' => 'app_appointments', '_controller' => 'App\\Controller\\AppointmentController::index'], null, null, null, true, false, null]],
        '/appointments/book' => [[['_route' => 'app_appointment_book', '_controller' => 'App\\Controller\\AppointmentController::book'], null, null, null, false, false, null]],
        '/appointments/my-appointments' => [[['_route' => 'app_my_appointments', '_controller' => 'App\\Controller\\AppointmentController::myAppointments'], null, null, null, false, false, null]],
        '/contacts' => [[['_route' => 'app_contacts', '_controller' => 'App\\Controller\\ContactController::contacts'], null, null, null, false, false, null]],
        '/physicians' => [[['_route' => 'app_physicians', '_controller' => 'App\\Controller\\HomeController::physicians'], null, null, null, false, false, null]],
        '/patient-info' => [[['_route' => 'app_patient_info', '_controller' => 'App\\Controller\\HomeController::patientInfo'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'app_blog', '_controller' => 'App\\Controller\\HomeController::blog'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/services' => [
            [['_route' => 'app_services', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_services_list', '_controller' => 'App\\Controller\\ServicesController::index'], null, ['GET' => 0], null, true, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|appointment/([^/]++)(?'
                            .'|(*:78)'
                            .'|/(?'
                                .'|c(?'
                                    .'|o(?'
                                        .'|nfirm(*:102)'
                                        .'|mplete(*:116)'
                                    .')'
                                    .'|ancel(*:130)'
                                .')'
                                .'|delete(*:145)'
                            .')'
                        .')'
                        .'|categories/(?'
                            .'|([^/]++)(?'
                                .'|(*:180)'
                                .'|/edit(*:193)'
                                .'|(*:201)'
                            .')'
                            .'|search(*:216)'
                        .')'
                        .'|service/([^/]++)(?'
                            .'|(*:244)'
                            .'|/(?'
                                .'|edit(*:260)'
                                .'|toggle\\-status(*:282)'
                            .')'
                            .'|(*:291)'
                        .')'
                    .')'
                    .'|ppointments/(?'
                        .'|book/([^/]++)(*:329)'
                        .'|success/([^/]++)(*:353)'
                        .'|view/([^/]++)(?'
                            .'|(*:377)'
                            .'|/pdf(*:389)'
                        .')'
                    .')'
                .')'
                .'|/services/(?'
                    .'|([^/]++)(?'
                        .'|(*:424)'
                    .')'
                    .'|category/([^/]++)(*:450)'
                    .'|s(?'
                        .'|peciality/([^/]++)(*:480)'
                        .'|earch(*:493)'
                    .')'
                    .'|grouped(*:509)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        78 => [[['_route' => 'admin_appointment_show', '_controller' => 'App\\Controller\\Admin\\AppointmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        102 => [[['_route' => 'admin_appointment_confirm', '_controller' => 'App\\Controller\\Admin\\AppointmentController::confirm'], ['id'], ['POST' => 0], null, false, false, null]],
        116 => [[['_route' => 'admin_appointment_complete', '_controller' => 'App\\Controller\\Admin\\AppointmentController::complete'], ['id'], ['POST' => 0], null, false, false, null]],
        130 => [[['_route' => 'admin_appointment_cancel', '_controller' => 'App\\Controller\\Admin\\AppointmentController::cancel'], ['id'], ['POST' => 0], null, false, false, null]],
        145 => [[['_route' => 'admin_appointment_delete', '_controller' => 'App\\Controller\\Admin\\AppointmentController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        180 => [[['_route' => 'admin_categorie_show', '_controller' => 'App\\Controller\\Admin\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        193 => [[['_route' => 'admin_categorie_edit', '_controller' => 'App\\Controller\\Admin\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        201 => [[['_route' => 'admin_categorie_delete', '_controller' => 'App\\Controller\\Admin\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        216 => [[['_route' => 'admin_categorie_search', '_controller' => 'App\\Controller\\Admin\\CategorieController::search'], [], ['GET' => 0], null, false, false, null]],
        244 => [[['_route' => 'admin_service_show', '_controller' => 'App\\Controller\\Admin\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        260 => [[['_route' => 'admin_service_edit', '_controller' => 'App\\Controller\\Admin\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        282 => [[['_route' => 'admin_service_toggle_status', '_controller' => 'App\\Controller\\Admin\\ServiceController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        291 => [[['_route' => 'admin_service_delete', '_controller' => 'App\\Controller\\Admin\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        329 => [[['_route' => 'app_appointment_book_service', '_controller' => 'App\\Controller\\AppointmentController::bookService'], ['id'], null, null, false, true, null]],
        353 => [[['_route' => 'app_appointment_success', '_controller' => 'App\\Controller\\AppointmentController::success'], ['id'], null, null, false, true, null]],
        377 => [[['_route' => 'app_appointment_view', '_controller' => 'App\\Controller\\AppointmentController::view'], ['id'], null, null, false, true, null]],
        389 => [[['_route' => 'app_appointment_pdf', '_controller' => 'App\\Controller\\AppointmentController::generatePdf'], ['id'], null, null, false, false, null]],
        424 => [
            [['_route' => 'app_service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_services_show', '_controller' => 'App\\Controller\\ServicesController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        450 => [[['_route' => 'app_services_by_category', '_controller' => 'App\\Controller\\ServicesController::byCategory'], ['id'], ['GET' => 0], null, false, true, null]],
        480 => [[['_route' => 'app_services_by_speciality', '_controller' => 'App\\Controller\\ServicesController::bySpeciality'], ['speciality'], ['GET' => 0], null, false, true, null]],
        493 => [[['_route' => 'app_services_search', '_controller' => 'App\\Controller\\ServicesController::search'], [], ['GET' => 0], null, false, false, null]],
        509 => [
            [['_route' => 'app_services_grouped', '_controller' => 'App\\Controller\\ServicesController::grouped'], [], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
