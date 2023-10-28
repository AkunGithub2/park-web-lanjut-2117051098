<?php

use CodeIgniter\Router\Home;
use CodeIgniter\Config\UserController;

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Home::index');

$routes->get('/user/profile', 'UserController::profile');

$routes->get('/user/create', 'UserController::create');

$routes->post('/user/store', 'UserController::store');

$routes->get('/user', 'UserController::index');