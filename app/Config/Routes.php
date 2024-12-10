<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\TodoController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/todo', [TodoController::class, 'getTodo']);