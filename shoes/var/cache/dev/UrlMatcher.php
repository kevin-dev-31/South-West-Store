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
        '/default' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/mentions' => [[['_route' => 'mentions', '_controller' => 'App\\Controller\\DefaultController::mentions'], null, null, null, false, false, null]],
        '/cgv' => [[['_route' => 'cgv', '_controller' => 'App\\Controller\\DefaultController::cgv'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::contactUs'], null, null, null, false, false, null]],
        '/a-propos' => [[['_route' => 'a_propos', '_controller' => 'App\\Controller\\DefaultController::aPropos'], null, null, null, false, false, null]],
        '/profile/session' => [[['_route' => 'user_session', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/profile/user-edit-profile' => [[['_route' => 'user_edit_profile', '_controller' => 'App\\Controller\\UserController::userEditProfile'], null, null, null, false, false, null]],
        '/profile/user-orders' => [[['_route' => 'user_orders', '_controller' => 'App\\Controller\\OrdersController::userOrders'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\UserController::addUser'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/forgotten-password' => [[['_route' => 'app_forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], null, null, null, false, false, null]],
        '/admin/add-product' => [[['_route' => 'add_product', '_controller' => 'App\\Controller\\ProductsController::addProducts'], null, null, null, false, false, null]],
        '/admin/modify-product' => [[['_route' => 'modify_product', '_controller' => 'App\\Controller\\ProductsController::modifyProducts'], null, null, null, false, false, null]],
        '/admin/ajax/load-product' => [[['_route' => 'edit_products_ajax', '_controller' => 'App\\Controller\\ProductsController::ajaxEdit'], null, null, null, false, false, null]],
        '/admin/ajax/edit-product' => [[['_route' => 'edit_validate', '_controller' => 'App\\Controller\\ProductsController::ajaxEditValidate'], null, null, null, false, false, null]],
        '/admin/admin-orders' => [[['_route' => 'admin_orders', '_controller' => 'App\\Controller\\OrdersController::adminOrders'], null, null, null, false, false, null]],
        '/products/shop-index' => [[['_route' => 'show_products', '_controller' => 'App\\Controller\\ProductsController::showProducts'], null, null, null, false, false, null]],
        '/products/search-products' => [[['_route' => 'search_products', '_controller' => 'App\\Controller\\ProductsController::searchProducts'], null, null, null, false, false, null]],
        '/products/cart-details' => [[['_route' => 'cart_details', '_controller' => 'App\\Controller\\ProductsController::viewCart'], null, null, null, true, false, null]],
        '/products/clean-cart' => [[['_route' => 'clean_cart', '_controller' => 'App\\Controller\\ProductsController::cleanCart'], null, null, null, false, false, null]],
        '/products/validate-order' => [[['_route' => 'validate_order', '_controller' => 'App\\Controller\\ProductsController::validateOrder'], null, null, null, false, false, null]],
        '/products/buy-cart' => [[['_route' => 'buy_cart', '_controller' => 'App\\Controller\\ProductsController::buy'], null, null, null, false, false, null]],
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
                .'|/pro(?'
                    .'|file/delete\\-profile/(\\d+)(*:202)'
                    .'|ducts/(?'
                        .'|view\\-details\\-shoes/(\\d+)(*:245)'
                        .'|delete\\-cart\\-product/(\\d+)(*:280)'
                    .')'
                .')'
                .'|/reset\\-password/([^/]++)(*:315)'
                .'|/admin/delete\\-product/(\\d+)(*:351)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        202 => [[['_route' => 'delete_profile', '_controller' => 'App\\Controller\\UserController::deleteProfile'], ['id'], null, null, false, true, null]],
        245 => [[['_route' => 'view_details', '_controller' => 'App\\Controller\\ProductsController::viewDetails'], ['id'], null, null, false, true, null]],
        280 => [[['_route' => 'delete_cart_product', '_controller' => 'App\\Controller\\ProductsController::deleteCartProduct'], ['key'], null, null, false, true, null]],
        315 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        351 => [
            [['_route' => 'delete_products', '_controller' => 'App\\Controller\\ProductsController::getProductsDeleteAction'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
