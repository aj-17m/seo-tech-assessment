<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/products/(:segment)', 'Products::category/$1');
$routes->get('/product/(:segment)', 'Products::detail/$1');
$routes->get('/sitemap.xml', 'Sitemap::index');

// Admin Routes
$routes->group('admin', function($routes) {
    // Public routes (no auth required)
    $routes->get('login', 'Admin::login');
    $routes->post('authenticate', 'Admin::authenticate');
    $routes->get('logout', 'Admin::logout');

    // Protected routes (require admin auth)
    $routes->group('', ['filter' => 'adminauth'], function($routes) {
        $routes->get('dashboard', 'Admin::dashboard');
        $routes->resource('categories', [
            'controller' => 'AdminCategories',
            'except' => 'show' // Remove show route if not needed
        ]);
        $routes->resource('products', [
            'controller' => 'AdminProducts',
            'except' => 'show' // Remove show route if not needed
        ]);
    });
});