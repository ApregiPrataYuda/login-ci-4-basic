<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('Authentications', 'Auth::index');
// $routes->get('Auth/Login', 'Auth::index');
$routes->post('Authentication', 'Auth::process');
$routes->get('Logout', 'Auth::Logout');

$routes->get('/Admin', 'Admin::index');
$routes->get('/User', 'User::index');