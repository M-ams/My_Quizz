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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/question' => [[['_route' => 'app_question_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reponse/end_update_quizz' => [[['_route' => 'app_update_quizz', '_controller' => 'App\\Controller\\ReponseController::end_update_quizz'], null, ['GET' => 0], null, false, false, null]],
        '/reponse/end_quizz' => [[['_route' => 'app_end_quizz', '_controller' => 'App\\Controller\\ReponseController::end_quizz'], null, ['GET' => 0], null, false, false, null]],
        '/reponse/index' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/verify' => [[['_route' => 'app_verify', '_controller' => 'App\\Controller\\VerifyController::index'], null, null, null, false, false, null]],
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
                .'|/category/(?'
                    .'|([^/]++)/(?'
                        .'|History(*:201)'
                        .'|edit(*:213)'
                    .')'
                    .'|reponse/([^/]++)/([^/]++)(*:247)'
                    .'|end/([^/]++)(*:267)'
                    .'|([^/]++)(?'
                        .'|/([^/]++)(*:295)'
                        .'|(*:303)'
                    .')'
                .')'
                .'|/question/(?'
                    .'|new/([^/]++)/([^/]++)(*:347)'
                    .'|([^/]++)(?'
                        .'|(*:366)'
                        .'|/edit/([^/]++)/([^/]++)/([^/]++)(*:406)'
                        .'|(*:414)'
                    .')'
                .')'
                .'|/reponse/(?'
                    .'|new/([^/]++)/([^/]++)/([^/]++)(*:466)'
                    .'|([^/]++)(?'
                        .'|(*:485)'
                        .'|/edit/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:534)'
                        .'|(*:542)'
                    .')'
                .')'
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
        201 => [[['_route' => 'app_show_history', '_controller' => 'App\\Controller\\CategoryController::History'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        213 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        247 => [[['_route' => 'app_reponse', '_controller' => 'App\\Controller\\CategoryController::show_answer'], ['id', 'idq'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        267 => [[['_route' => 'app_final_quizz', '_controller' => 'App\\Controller\\CategoryController::Final_quizz'], ['id'], ['GET' => 0], null, false, true, null]],
        295 => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], ['id', 'idq'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        303 => [
            [['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        347 => [[['_route' => 'app_question_new', '_controller' => 'App\\Controller\\QuestionController::new'], ['namecategory', 'idq'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        366 => [[['_route' => 'app_question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        406 => [[['_route' => 'app_question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['id', 'idc', 'nbq', 'nbr'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        414 => [[['_route' => 'app_question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        466 => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['namecategory', 'idq', 'idr'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        485 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        534 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id', 'idc', 'nbq', 'idq', 'nbr'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        542 => [
            [['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
