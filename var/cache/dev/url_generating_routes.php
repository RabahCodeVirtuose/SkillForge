<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt_stylesheet' => [[], ['_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], [], [['text', '/_wdt/styles']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'admin_instructeurs' => [[], ['_controller' => 'App\\Controller\\AdminController::listInstructors'], [], [['text', '/admin/instructeurs']], [], [], []],
    'admin_promote' => [['id'], ['_controller' => 'App\\Controller\\AdminController::promoteInstructor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/promouvoir']], [], [], []],
    'admin_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteInstructor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/supprimer']], [], [], []],
    'admin_downgrade' => [['id'], ['_controller' => 'App\\Controller\\AdminController::downgradeAdmin'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/retrograder']], [], [], []],
    'app_atelier_index' => [[], ['_controller' => 'App\\Controller\\AtelierController::index'], [], [['text', '/atelier']], [], [], []],
    'mes_inscriptions' => [[], ['_controller' => 'App\\Controller\\AtelierController::mesInscriptions'], [], [['text', '/atelier/mesinscriptions']], [], [], []],
    'app_atelier_new' => [[], ['_controller' => 'App\\Controller\\AtelierController::new'], [], [['text', '/atelier/new']], [], [], []],
    'app_atelier_show' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'app_atelier_edit' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'app_atelier_delete' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'app_atelier_inscription' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::inscription'], [], [['text', '/inscription'], ['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'app_atelier_desinscription' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::desinscription'], [], [['text', '/desinscription'], ['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'app_atelier_noter' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::noter'], [], [['text', '/noter'], ['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'registeration' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/registration']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\AdminController::listInstructors' => [[], ['_controller' => 'App\\Controller\\AdminController::listInstructors'], [], [['text', '/admin/instructeurs']], [], [], []],
    'App\Controller\AdminController::promoteInstructor' => [['id'], ['_controller' => 'App\\Controller\\AdminController::promoteInstructor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/promouvoir']], [], [], []],
    'App\Controller\AdminController::deleteInstructor' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteInstructor'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/supprimer']], [], [], []],
    'App\Controller\AdminController::downgradeAdmin' => [['id'], ['_controller' => 'App\\Controller\\AdminController::downgradeAdmin'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/retrograder']], [], [], []],
    'App\Controller\AtelierController::index' => [[], ['_controller' => 'App\\Controller\\AtelierController::index'], [], [['text', '/atelier']], [], [], []],
    'App\Controller\AtelierController::mesInscriptions' => [[], ['_controller' => 'App\\Controller\\AtelierController::mesInscriptions'], [], [['text', '/atelier/mesinscriptions']], [], [], []],
    'App\Controller\AtelierController::new' => [[], ['_controller' => 'App\\Controller\\AtelierController::new'], [], [['text', '/atelier/new']], [], [], []],
    'App\Controller\AtelierController::show' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'App\Controller\AtelierController::edit' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'App\Controller\AtelierController::delete' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'App\Controller\AtelierController::inscription' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::inscription'], [], [['text', '/inscription'], ['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'App\Controller\AtelierController::desinscription' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::desinscription'], [], [['text', '/desinscription'], ['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'App\Controller\AtelierController::noter' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::noter'], [], [['text', '/noter'], ['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/registration']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
