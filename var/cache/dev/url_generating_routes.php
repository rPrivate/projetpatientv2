<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'superadmin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/superadmin']], [], []],
    'superadminDel' => [[], ['_controller' => 'App\\Controller\\AdminController::del'], [], [['text', '/superadminDel']], [], []],
    'bed_list' => [[], ['_controller' => 'App\\Controller\\BedListController::index'], [], [['text', '/bedList']], [], []],
    'bedAdd' => [[], ['_controller' => 'App\\Controller\\BedListController::addChambre'], [], [['text', '/bedAdd']], [], []],
    'bedDel' => [[], ['_controller' => 'App\\Controller\\BedListController::delChambre'], [], [['text', '/bedDel']], [], []],
    'bedMod' => [['id'], ['_controller' => 'App\\Controller\\BedListController::modChambre'], [], [['variable', '', '[^/]++', 'id', true], ['text', '/bedMod']], [], []],
    'bedVoir' => [[], ['_controller' => 'App\\Controller\\BedListController::voirChambre'], [], [['text', '/bedVoir']], [], []],
    'default' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/index']], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\HomepageController::index'], [], [['text', '/']], [], []],
    'rdv' => [[], ['_controller' => 'App\\Controller\\IndexRDVController::index'], [], [['text', '/rdv']], [], []],
    'medecin' => [[], ['_controller' => 'App\\Controller\\MedecinController::index'], [], [['text', '/medecin']], [], []],
    'rdvAdd' => [[], ['_controller' => 'App\\Controller\\MedecinController::rdvAdd'], [], [['text', '/rdvAdd']], [], []],
    'medecinliste' => [[], ['_controller' => 'App\\Controller\\MedecinListController::index'], [], [['text', '/medecinliste']], [], []],
    'medecinAdd' => [[], ['_controller' => 'App\\Controller\\MedecinListController::addMedecin'], [], [['text', '/medecinAdd']], [], []],
    'patient' => [[], ['_controller' => 'App\\Controller\\PatientController::index'], [], [['text', '/patient']], [], []],
    'patientadd' => [[], ['_controller' => 'App\\Controller\\PatientController::addPatient'], [], [['text', '/patient/add']], [], []],
    'patientmod' => [['id'], ['_controller' => 'App\\Controller\\PatientController::modPatient'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/patient/mod']], [], []],
    'rdv_list' => [[], ['_controller' => 'App\\Controller\\RDVListController::index'], [], [['text', '/rdvlist']], [], []],
    'rdv_listAll' => [[], ['_controller' => 'App\\Controller\\RDVListController::showAll'], [], [['text', '/rdvlistAll']], [], []],
    'accept' => [[], ['_controller' => 'App\\Controller\\RDVListController::accept'], [], [['text', '/accept']], [], []],
    'decline' => [[], ['_controller' => 'App\\Controller\\RDVListController::decline'], [], [['text', '/decline']], [], []],
    'app_registerPatient' => [[], ['_controller' => 'App\\Controller\\RegistrationController::registerPatient'], [], [['text', '/registerPatient']], [], []],
    'app_registerInfirmiere' => [[], ['_controller' => 'App\\Controller\\RegistrationController::registerInfirmiere'], [], [['text', '/registerInfirmiere']], [], []],
    'app_registerSecretaire' => [[], ['_controller' => 'App\\Controller\\RegistrationController::registerSecretaire'], [], [['text', '/registerSecretaire']], [], []],
    'app_registerAdmin' => [[], ['_controller' => 'App\\Controller\\RegistrationController::registerAdmin'], [], [['text', '/registerAdmin']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecuriteController::login'], [], [['text', '/connexion']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecuriteController::logout'], [], [['text', '/logout']], [], []],
    'sejour' => [[], ['_controller' => 'App\\Controller\\SejourController::index'], [], [['text', '/sejour']], [], []],
    'service' => [[], ['_controller' => 'App\\Controller\\ServiceController::index'], [], [['text', '/service']], [], []],
    'serviceAdd' => [[], ['_controller' => 'App\\Controller\\ServiceController::addService'], [], [['text', '/serviceAdd']], [], []],
];
