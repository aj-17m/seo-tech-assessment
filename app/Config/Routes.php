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
    $routes->get('login', 'Admin::login');
    $routes->post('authenticate', 'Admin::authenticate');
    $routes->get('logout', 'Admin::logout');
    
    $routes->resource('categories', ['controller' => 'AdminCategories']);
    $routes->resource('products', ['controller' => 'AdminProducts']);
});