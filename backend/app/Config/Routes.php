<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ====================
// Public Pages
// ====================

$routes->get('/', 'Home::index');
$routes->get('contact', 'Contact::index');
$routes->get('products', 'Products::index');
$routes->get('restock-request/(:num)', 'RestockRequests::form/$1');
$routes->get('view-products/(:num)', 'Products::viewprod/$1');
$routes->post('restock-request', 'RestockRequests::store');

// Cart
$routes->get('cart', 'Cart::index');
$routes->post('cart/add/(:num)', 'Cart::add/$1');
$routes->post('cart/update/(:num)', 'Cart::update/$1');
$routes->post('cart/remove/(:num)', 'Cart::remove/$1');
$routes->get('checkout', 'Checkout::index');
$routes->post('checkout/complete', 'Checkout::complete');
$routes->get('orders', 'Orders::index');

// ====================
// Authentication
// ====================

$routes->get('login', 'AuthController::login');
$routes->post('authenticate', 'AuthController::authenticate');
$routes->get('logout', 'AuthController::logout');

$routes->get('signup', 'AuthController::signup');
$routes->post('register', 'AuthController::register');


// ====================
// Admin Pages
// ====================

$routes->group('admin', ['filter' => 'admin'], static function ($routes) {
    $routes->get('inventory', 'AdminController::inventory');
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->get('suppliers', 'SupplierController::index');
    $routes->get('suppliers/create', 'SupplierController::create');
    $routes->post('suppliers/store', 'SupplierController::store');

    // Product Management
    $routes->get('products', 'ProductController::index');
    $routes->get('products/create', 'ProductController::create');
    $routes->post('products/store', 'ProductController::store');

    $routes->get('products/edit/(:num)', 'ProductController::edit/$1');
    $routes->post('products/update/(:num)', 'ProductController::update/$1');

    $routes->get('products/delete/(:num)', 'ProductController::delete/$1');
});
