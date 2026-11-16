<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/products', 'Products::index');
$routes->get('/login', 'AuthController::login');
$routes->post('/authenticate', 'AuthController::authenticate');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/admin/dashboard', 'AdminController::dashboard');
$routes->group('admin', ['filter' => 'admin'], function ($routes) {

    $routes->get('dashboard', 'AdminController::dashboard');
});
$routes->get('/signup', 'AuthController::signup');
$routes->post('/register', 'AuthController::register');

$routes->group('admin', ['filter' => 'admin'], function ($routes) {

    $routes->get('dashboard', 'AdminController::dashboard');

    $routes->get('products', 'ProductController::index');
    $routes->get('products/create', 'ProductController::create');
    $routes->post('products/store', 'ProductController::store');
});
