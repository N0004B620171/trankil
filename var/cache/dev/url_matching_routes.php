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
        '/budget' => [[['_route' => 'budget_index', '_controller' => 'App\\Controller\\BudgetController::index'], null, ['GET' => 0], null, true, false, null]],
        '/budget/new' => [[['_route' => 'budget_new', '_controller' => 'App\\Controller\\BudgetController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande' => [[['_route' => 'commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/new' => [[['_route' => 'commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/compte' => [[['_route' => 'compte_index', '_controller' => 'App\\Controller\\CompteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/compte/new' => [[['_route' => 'compte_new', '_controller' => 'App\\Controller\\CompteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/engagement' => [[['_route' => 'engagement_index', '_controller' => 'App\\Controller\\EngagementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/engagement/new' => [[['_route' => 'engagement_new', '_controller' => 'App\\Controller\\EngagementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/nouvelle/mesure' => [[['_route' => 'nouvelle_mesure_index', '_controller' => 'App\\Controller\\NouvelleMesureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/nouvelle/mesure/new' => [[['_route' => 'nouvelle_mesure_new', '_controller' => 'App\\Controller\\NouvelleMesureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reamenagement' => [[['_route' => 'reamenagement_index', '_controller' => 'App\\Controller\\ReamenagementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reamenagement/new' => [[['_route' => 'reamenagement_new', '_controller' => 'App\\Controller\\ReamenagementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/budget/([^/]++)(?'
                    .'|(*:188)'
                    .'|/edit(*:201)'
                    .'|(*:209)'
                .')'
                .'|/com(?'
                    .'|mande/([^/]++)(?'
                        .'|(*:242)'
                        .'|/edit(*:255)'
                        .'|(*:263)'
                    .')'
                    .'|pte/([^/]++)(?'
                        .'|(*:287)'
                        .'|/edit(*:300)'
                        .'|(*:308)'
                    .')'
                .')'
                .'|/engagement/([^/]++)(?'
                    .'|(*:341)'
                    .'|/edit(*:354)'
                    .'|(*:362)'
                .')'
                .'|/nouvelle/mesure/([^/]++)(?'
                    .'|(*:399)'
                    .'|/edit(*:412)'
                    .'|(*:420)'
                .')'
                .'|/reamenagement/([^/]++)(?'
                    .'|(*:455)'
                    .'|/edit(*:468)'
                    .'|(*:476)'
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
        188 => [[['_route' => 'budget_show', '_controller' => 'App\\Controller\\BudgetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'budget_edit', '_controller' => 'App\\Controller\\BudgetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        209 => [[['_route' => 'budget_delete', '_controller' => 'App\\Controller\\BudgetController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        242 => [[['_route' => 'commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        255 => [[['_route' => 'commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        287 => [[['_route' => 'compte_show', '_controller' => 'App\\Controller\\CompteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        300 => [[['_route' => 'compte_edit', '_controller' => 'App\\Controller\\CompteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        308 => [[['_route' => 'compte_delete', '_controller' => 'App\\Controller\\CompteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        341 => [[['_route' => 'engagement_show', '_controller' => 'App\\Controller\\EngagementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        354 => [[['_route' => 'engagement_edit', '_controller' => 'App\\Controller\\EngagementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        362 => [[['_route' => 'engagement_delete', '_controller' => 'App\\Controller\\EngagementController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        399 => [[['_route' => 'nouvelle_mesure_show', '_controller' => 'App\\Controller\\NouvelleMesureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        412 => [[['_route' => 'nouvelle_mesure_edit', '_controller' => 'App\\Controller\\NouvelleMesureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        420 => [[['_route' => 'nouvelle_mesure_delete', '_controller' => 'App\\Controller\\NouvelleMesureController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        455 => [[['_route' => 'reamenagement_show', '_controller' => 'App\\Controller\\ReamenagementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        468 => [[['_route' => 'reamenagement_edit', '_controller' => 'App\\Controller\\ReamenagementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        476 => [
            [['_route' => 'reamenagement_delete', '_controller' => 'App\\Controller\\ReamenagementController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
