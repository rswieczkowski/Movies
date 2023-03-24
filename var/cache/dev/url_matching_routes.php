<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/movies' => [[['_route' => 'movies', '_controller' => 'App\\Controller\\MoviesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/movies/create' => [[['_route' => 'create_movie', '_controller' => 'App\\Controller\\MoviesController::create'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/movies/(?'
                    .'|edit/([^/]++)(*:66)'
                    .'|([^/]++)(*:81)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        66 => [[['_route' => 'edit_movie', '_controller' => 'App\\Controller\\MoviesController::edit'], ['id'], null, null, false, true, null]],
        81 => [
            [['_route' => 'movie', '_controller' => 'App\\Controller\\MoviesController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
