<?php

use App\Controllers\UserController;
use App\Controllers\WebController;
use Support\Router\Routes;
use Support\Router\View;

$routes = new Routes();

// --------------- routes --------------------------
$routes->get('/', [WebController::class, 'index']);
$routes->get('/page', [WebController::class, 'page']);
$routes->get('/api/a', [UserController::class, 'index']);
$routes->get('/{any}', [WebController::class, 'index']);

// -------------------------------------------------

return $routes;