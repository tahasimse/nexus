<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/company/register' => [[['_route' => 'app_company_register', '_controller' => 'App\\Controller\\CompanyController::register'], null, null, null, false, false, null]],
        '/company/login' => [[['_route' => 'app_company_login', '_controller' => 'App\\Controller\\CompanyController::login'], null, null, null, false, false, null]],
        '/dev/register' => [[['_route' => 'app_dev_register', '_controller' => 'App\\Controller\\DevController::register'], null, null, null, false, false, null]],
        '/dev/login' => [[['_route' => 'app_dev_login', '_controller' => 'App\\Controller\\DevController::login'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/company/home' => [[['_route' => 'company_home', '_controller' => 'App\\Controller\\HomeController::companyHome'], null, null, null, false, false, null]],
        '/developer/home' => [[['_route' => 'developer_home', '_controller' => 'App\\Controller\\HomeController::developerHome'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
