<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/book' => [[['_route' => 'book_index', '_controller' => 'App\\Controller\\BookController::index'], null, ['GET' => 0], null, true, false, null]],
        '/book/new' => [[['_route' => 'book_new', '_controller' => 'App\\Controller\\BookController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api(.+)(*:50)'
                .'|/book/([^/]++)(?'
                    .'|(*:74)'
                    .'|/edit(*:86)'
                    .'|(*:93)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:118)'
                    .'|/edit(*:131)'
                    .'|(*:139)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        50 => [[['_route' => 'api_route', '_controller' => 'App\\Controller\\ApiController::index'], ['params'], null, null, false, true, null]],
        74 => [[['_route' => 'book_show', '_controller' => 'App\\Controller\\BookController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        86 => [[['_route' => 'book_edit', '_controller' => 'App\\Controller\\BookController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        93 => [[['_route' => 'book_delete', '_controller' => 'App\\Controller\\BookController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        118 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        131 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        139 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
