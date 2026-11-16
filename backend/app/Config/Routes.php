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

    // Dashboard
    $routes->get('dashboard', 'AdminController::dashboard');

    // Product Management
    $routes->get('products', 'ProductController::index');
    $routes->get('products/create', 'ProductController::create');
    $routes->post('products/store', 'ProductController::store');

    $routes->get('products/edit/(:num)', 'ProductController::edit/$1');
    $routes->post('products/update/(:num)', 'ProductController::update/$1');

    $routes->get('products/delete/(:num)', 'ProductController::delete/$1');
});
