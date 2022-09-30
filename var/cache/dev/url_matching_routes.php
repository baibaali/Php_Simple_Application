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
        '/buildings' => [[['_route' => 'building_list', '_controller' => 'App\\Controller\\BuildingController::listAction'], null, ['GET' => 0], null, true, false, null]],
        '/buildings/create' => [[['_route' => 'building_create', '_controller' => 'App\\Controller\\BuildingController::createAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::indexAction'], null, null, null, false, false, null]],
        '/groups' => [[['_route' => 'group_list', '_controller' => 'App\\Controller\\GroupController::listAction'], null, ['GET' => 0], null, true, false, null]],
        '/groups/create' => [[['_route' => 'group_create', '_controller' => 'App\\Controller\\GroupController::createAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rooms' => [[['_route' => 'room_list', '_controller' => 'App\\Controller\\RoomController::listAction'], null, ['GET' => 0], null, true, false, null]],
        '/rooms/create' => [[['_route' => 'room_create', '_controller' => 'App\\Controller\\RoomController::createAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/buildings/(?'
                    .'|(\\d+)(*:187)'
                    .'|(\\d+)/edit(*:205)'
                .')'
                .'|/groups/(?'
                    .'|(\\d+)(*:230)'
                    .'|(\\d+)/edit(*:248)'
                .')'
                .'|/rooms/(?'
                    .'|(\\d+)(*:272)'
                    .'|(\\d+)/edit(*:290)'
                    .'|(\\d+)/reservation(*:315)'
                    .'|(\\d+)/request(*:336)'
                    .'|(\\d+)/reservation(*:361)'
                    .'|(\\d+)/request(*:382)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        187 => [[['_route' => 'building_detail', '_controller' => 'App\\Controller\\BuildingController::detailAction'], ['id'], ['GET' => 0], null, false, true, null]],
        205 => [[['_route' => 'building_edit', '_controller' => 'App\\Controller\\BuildingController::editAction'], ['id'], ['GET' => 0, 'PATCH' => 1], null, false, false, null]],
        230 => [[['_route' => 'group_detail', '_controller' => 'App\\Controller\\GroupController::detailAction'], ['id'], ['GET' => 0], null, false, true, null]],
        248 => [[['_route' => 'group_edit', '_controller' => 'App\\Controller\\GroupController::editAction'], ['id'], ['GET' => 0, 'PATCH' => 1], null, false, false, null]],
        272 => [[['_route' => 'room_detail', '_controller' => 'App\\Controller\\RoomController::detailAction'], ['id'], ['GET' => 0], null, false, true, null]],
        290 => [[['_route' => 'room_edit', '_controller' => 'App\\Controller\\RoomController::editAction'], ['id'], ['GET' => 0, 'PATCH' => 1], null, false, false, null]],
        315 => [[['_route' => 'room_reservation', '_controller' => 'App\\Controller\\RoomController::reservationAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        336 => [[['_route' => 'room_request', '_controller' => 'App\\Controller\\RoomController::requestAction'], ['id'], ['POST' => 0], null, false, false, null]],
        361 => [[['_route' => 'room_decision_reservation', '_controller' => 'App\\Controller\\RoomController::reservationDecisionAction'], ['id'], ['PATCH' => 0], null, true, false, null]],
        382 => [
            [['_route' => 'room_decision_request', '_controller' => 'App\\Controller\\RoomController::requestDecisionAction'], ['id'], ['PATCH' => 0], null, true, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
