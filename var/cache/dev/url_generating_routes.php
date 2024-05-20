<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
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
    'api_questions_index' => [[], ['_controller' => 'App\\Controller\\ApiController::index'], [], [['text', '/api/questions']], [], [], []],
    'api_questions_show' => [['id'], ['_controller' => 'App\\Controller\\ApiController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/questions']], [], [], []],
    'api_questions_create' => [[], ['_controller' => 'App\\Controller\\ApiController::create'], [], [['text', '/api/questions/create']], [], [], []],
    'api_questions_update' => [['id'], ['_controller' => 'App\\Controller\\ApiController::update'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/questions']], [], [], []],
    'api_questions_delete' => [['id'], ['_controller' => 'App\\Controller\\ApiController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/questions']], [], [], []],
    'questions_index' => [[], ['_controller' => 'App\\Controller\\QuestionController::index'], [], [['text', '/questions']], [], [], []],
    'questions_show' => [['id'], ['_controller' => 'App\\Controller\\QuestionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/questions']], [], [], []],
    'question_new' => [[], ['_controller' => 'App\\Controller\\QuestionController::create'], [], [['text', '/question/new']], [], [], []],
    'questions_edit' => [['id'], ['_controller' => 'App\\Controller\\QuestionController::update'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/questions']], [], [], []],
    'questions_delete' => [['id'], ['_controller' => 'App\\Controller\\QuestionController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/questions']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'dashboard' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard']], [], [], []],
    'App\Controller\ApiController::index' => [[], ['_controller' => 'App\\Controller\\ApiController::index'], [], [['text', '/api/questions']], [], [], []],
    'App\Controller\ApiController::show' => [['id'], ['_controller' => 'App\\Controller\\ApiController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/questions']], [], [], []],
    'App\Controller\ApiController::create' => [[], ['_controller' => 'App\\Controller\\ApiController::create'], [], [['text', '/api/questions/create']], [], [], []],
    'App\Controller\ApiController::update' => [['id'], ['_controller' => 'App\\Controller\\ApiController::update'], [], [['text', '/update'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/questions']], [], [], []],
    'App\Controller\ApiController::delete' => [['id'], ['_controller' => 'App\\Controller\\ApiController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/api/questions']], [], [], []],
    'App\Controller\DashboardController::index' => [[], ['_controller' => 'App\\Controller\\DashboardController::index'], [], [['text', '/dashboard']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\QuestionController::index' => [[], ['_controller' => 'App\\Controller\\QuestionController::index'], [], [['text', '/questions']], [], [], []],
    'App\Controller\QuestionController::show' => [['id'], ['_controller' => 'App\\Controller\\QuestionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/questions']], [], [], []],
    'App\Controller\QuestionController::create' => [[], ['_controller' => 'App\\Controller\\QuestionController::create'], [], [['text', '/question/new']], [], [], []],
    'App\Controller\QuestionController::update' => [['id'], ['_controller' => 'App\\Controller\\QuestionController::update'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/questions']], [], [], []],
    'App\Controller\QuestionController::delete' => [['id'], ['_controller' => 'App\\Controller\\QuestionController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/questions']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];