<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'default' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/default']], [], []],
    'user' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], []],
    'mentions' => [[], ['_controller' => 'App\\Controller\\DefaultController::mentions'], [], [['text', '/mentions']], [], []],
    'cgv' => [[], ['_controller' => 'App\\Controller\\DefaultController::cgv'], [], [['text', '/cgv']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::contactUs'], [], [['text', '/contact']], [], []],
    'a_propos' => [[], ['_controller' => 'App\\Controller\\DefaultController::aPropos'], [], [['text', '/a-propos']], [], []],
    'user_session' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/profile/session']], [], []],
    'user_edit_profile' => [[], ['_controller' => 'App\\Controller\\UserController::userEditProfile'], [], [['text', '/profile/user-edit-profile']], [], []],
    'user_orders' => [[], ['_controller' => 'App\\Controller\\OrdersController::userOrders'], [], [['text', '/profile/user-orders']], [], []],
    'delete_profile' => [['id'], ['_controller' => 'App\\Controller\\UserController::deleteProfile'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/profile/delete-profile']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\UserController::addUser'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/logout']], [], []],
    'app_forgotten_password' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], [], [['text', '/forgotten-password']], [], []],
    'app_reset_password' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::resetPassword'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password']], [], []],
    'add_product' => [[], ['_controller' => 'App\\Controller\\ProductsController::addProducts'], [], [['text', '/admin/add-product']], [], []],
    'modify_product' => [[], ['_controller' => 'App\\Controller\\ProductsController::modifyProducts'], [], [['text', '/admin/modify-product']], [], []],
    'edit_products_ajax' => [[], ['_controller' => 'App\\Controller\\ProductsController::ajaxEdit'], [], [['text', '/admin/ajax/load-product']], [], []],
    'edit_validate' => [[], ['_controller' => 'App\\Controller\\ProductsController::ajaxEditValidate'], [], [['text', '/admin/ajax/edit-product']], [], []],
    'delete_products' => [['id'], ['_controller' => 'App\\Controller\\ProductsController::getProductsDeleteAction'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/delete-product']], [], []],
    'admin_orders' => [[], ['_controller' => 'App\\Controller\\OrdersController::adminOrders'], [], [['text', '/admin/admin-orders']], [], []],
    'show_products' => [[], ['_controller' => 'App\\Controller\\ProductsController::showProducts'], [], [['text', '/products/shop-index']], [], []],
    'view_details' => [['id'], ['_controller' => 'App\\Controller\\ProductsController::viewDetails'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/products/view-details-shoes']], [], []],
    'search_products' => [[], ['_controller' => 'App\\Controller\\ProductsController::searchProducts'], [], [['text', '/products/search-products']], [], []],
    'cart_details' => [[], ['_controller' => 'App\\Controller\\ProductsController::viewCart'], [], [['text', '/products/cart-details/']], [], []],
    'delete_cart_product' => [['key'], ['_controller' => 'App\\Controller\\ProductsController::deleteCartProduct'], ['key' => '\\d+'], [['variable', '/', '\\d+', 'key', true], ['text', '/products/delete-cart-product']], [], []],
    'clean_cart' => [[], ['_controller' => 'App\\Controller\\ProductsController::cleanCart'], [], [['text', '/products/clean-cart']], [], []],
    'validate_order' => [[], ['_controller' => 'App\\Controller\\ProductsController::validateOrder'], [], [['text', '/products/validate-order']], [], []],
    'buy_cart' => [[], ['_controller' => 'App\\Controller\\ProductsController::buy'], [], [['text', '/products/buy-cart']], [], []],
];