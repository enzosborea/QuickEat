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
        '/member/account' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/member/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\IndexController::panier'], null, null, null, false, false, null]],
        '/member/resumecommande' => [[['_route' => 'resumecommande', '_controller' => 'App\\Controller\\IndexController::resumecommande'], null, null, null, true, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/admin/restaurant' => [[['_route' => 'restaurant_index', '_controller' => 'App\\Controller\\RestaurantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/restaurant/new' => [[['_route' => 'restaurant_new', '_controller' => 'App\\Controller\\RestaurantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/restau/restaurateur' => [[['_route' => 'restaurateur', '_controller' => 'App\\Controller\\RestaurateurController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/restau/restaurateur/new' => [[['_route' => 'new', '_controller' => 'App\\Controller\\RestaurateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/oubli-pass' => [[['_route' => 'app_forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPass'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/me(?'
                    .'|mber/(?'
                        .'|([^/]++)/edit_account(*:204)'
                        .'|panier/(?'
                            .'|add/([^/]++)(*:234)'
                            .'|remove/([^/]++)(*:257)'
                            .'|commande/([^/]++)(*:282)'
                        .')'
                    .')'
                    .'|dia/cache/resolve/(?'
                        .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:343)'
                        .'|([A-z0-9_-]*)/(.+)(*:369)'
                    .')'
                .')'
                .'|/lerestaurant/([^/]++)(*:401)'
                .'|/res(?'
                    .'|tau/(?'
                        .'|([^/]++)/plat(?'
                            .'|(*:439)'
                            .'|/(?'
                                .'|new(*:454)'
                                .'|show/([^/]++)(*:475)'
                                .'|([^/]++)(?'
                                    .'|/edit(*:499)'
                                    .'|(*:507)'
                                .')'
                            .')'
                        .')'
                        .'|restaurateur/([^/]++)/edit_logo(*:549)'
                    .')'
                    .'|et\\-pass/([^/]++)(*:575)'
                .')'
                .'|/a(?'
                    .'|ctivation/([^/]++)(*:607)'
                    .'|dmin/(?'
                        .'|restaurant/([^/]++)(?'
                            .'|(*:645)'
                            .'|/edit(*:658)'
                            .'|(*:666)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|(*:691)'
                            .'|/edit(*:704)'
                            .'|(*:712)'
                        .')'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        204 => [[['_route' => 'account_edit', '_controller' => 'App\\Controller\\AccountController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        234 => [[['_route' => 'panier_add', '_controller' => 'App\\Controller\\IndexController::add'], ['id'], null, null, false, true, null]],
        257 => [[['_route' => 'panier_remove', '_controller' => 'App\\Controller\\IndexController::remove'], ['id'], null, null, false, true, null]],
        282 => [[['_route' => 'commande', '_controller' => 'App\\Controller\\IndexController::commande'], ['id'], null, null, false, true, null]],
        343 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        369 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        401 => [[['_route' => 'lerestaurant', '_controller' => 'App\\Controller\\IndexController::restaurant'], ['id'], null, null, false, true, null]],
        439 => [[['_route' => 'plat_index', '_controller' => 'App\\Controller\\PlatController::index'], ['resto'], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        454 => [[['_route' => 'plat_new', '_controller' => 'App\\Controller\\PlatController::new'], ['resto'], ['GET' => 0, 'POST' => 1], null, true, false, null]],
        475 => [[['_route' => 'plat_show', '_controller' => 'App\\Controller\\PlatController::show'], ['resto', 'id'], ['GET' => 0], null, false, true, null]],
        499 => [[['_route' => 'plat_edit', '_controller' => 'App\\Controller\\PlatController::edit'], ['resto', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        507 => [[['_route' => 'plat_delete', '_controller' => 'App\\Controller\\PlatController::delete'], ['resto', 'id'], ['DELETE' => 0], null, false, true, null]],
        549 => [[['_route' => 'edit_logo', '_controller' => 'App\\Controller\\RestaurateurController::edit_logo'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        575 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        607 => [[['_route' => 'activation', '_controller' => 'App\\Controller\\RegistrationController::activation'], ['token'], null, null, false, true, null]],
        645 => [[['_route' => 'restaurant_show', '_controller' => 'App\\Controller\\RestaurantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        658 => [[['_route' => 'restaurant_edit', '_controller' => 'App\\Controller\\RestaurantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        666 => [[['_route' => 'restaurant_delete', '_controller' => 'App\\Controller\\RestaurantController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        691 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        704 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        712 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
