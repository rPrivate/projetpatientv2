<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/superadmin' => [[['_route' => 'superadmin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/superadminDel' => [[['_route' => 'superadminDel', '_controller' => 'App\\Controller\\AdminController::del'], null, null, null, false, false, null]],
        '/bedList' => [[['_route' => 'bed_list', '_controller' => 'App\\Controller\\BedListController::index'], null, null, null, false, false, null]],
        '/bedAdd' => [[['_route' => 'bedAdd', '_controller' => 'App\\Controller\\BedListController::addChambre'], null, null, null, false, false, null]],
        '/bedDel' => [[['_route' => 'bedDel', '_controller' => 'App\\Controller\\BedListController::delChambre'], null, null, null, false, false, null]],
        '/bedVoir' => [[['_route' => 'bedVoir', '_controller' => 'App\\Controller\\BedListController::voirChambre'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomepageController::index'], null, null, null, false, false, null]],
        '/rdv' => [[['_route' => 'rdv', '_controller' => 'App\\Controller\\IndexRDVController::index'], null, null, null, false, false, null]],
        '/medecin' => [[['_route' => 'medecin', '_controller' => 'App\\Controller\\MedecinController::index'], null, null, null, false, false, null]],
        '/rdvAdd' => [[['_route' => 'rdvAdd', '_controller' => 'App\\Controller\\MedecinController::rdvAdd'], null, null, null, false, false, null]],
        '/medecinliste' => [[['_route' => 'medecinliste', '_controller' => 'App\\Controller\\MedecinListController::index'], null, null, null, false, false, null]],
        '/medecinAdd' => [[['_route' => 'medecinAdd', '_controller' => 'App\\Controller\\MedecinListController::addMedecin'], null, null, null, false, false, null]],
        '/patient' => [[['_route' => 'patient', '_controller' => 'App\\Controller\\PatientController::index'], null, null, null, false, false, null]],
        '/patient/add' => [[['_route' => 'patientadd', '_controller' => 'App\\Controller\\PatientController::addPatient'], null, null, null, false, false, null]],
        '/rdvlist' => [[['_route' => 'rdv_list', '_controller' => 'App\\Controller\\RDVListController::index'], null, null, null, false, false, null]],
        '/rdvlistAll' => [[['_route' => 'rdv_listAll', '_controller' => 'App\\Controller\\RDVListController::showAll'], null, null, null, false, false, null]],
        '/accept' => [[['_route' => 'accept', '_controller' => 'App\\Controller\\RDVListController::accept'], null, null, null, false, false, null]],
        '/decline' => [[['_route' => 'decline', '_controller' => 'App\\Controller\\RDVListController::decline'], null, null, null, false, false, null]],
        '/registerPatient' => [[['_route' => 'app_registerPatient', '_controller' => 'App\\Controller\\RegistrationController::registerPatient'], null, null, null, false, false, null]],
        '/registerInfirmiere' => [[['_route' => 'app_registerInfirmiere', '_controller' => 'App\\Controller\\RegistrationController::registerInfirmiere'], null, null, null, false, false, null]],
        '/registerSecretaire' => [[['_route' => 'app_registerSecretaire', '_controller' => 'App\\Controller\\RegistrationController::registerSecretaire'], null, null, null, false, false, null]],
        '/registerAdmin' => [[['_route' => 'app_registerAdmin', '_controller' => 'App\\Controller\\RegistrationController::registerAdmin'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecuriteController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecuriteController::logout'], null, null, null, false, false, null]],
        '/sejour' => [[['_route' => 'sejour', '_controller' => 'App\\Controller\\SejourController::index'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'service', '_controller' => 'App\\Controller\\ServiceController::index'], null, null, null, false, false, null]],
        '/serviceAdd' => [[['_route' => 'serviceAdd', '_controller' => 'App\\Controller\\ServiceController::addService'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/bedMod([^/]++)(*:184)'
                .'|/patient/mod/([^/]++)(*:213)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        184 => [[['_route' => 'bedMod', '_controller' => 'App\\Controller\\BedListController::modChambre'], ['id'], null, null, false, true, null]],
        213 => [
            [['_route' => 'patientmod', '_controller' => 'App\\Controller\\PatientController::modPatient'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
