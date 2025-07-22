<?php

namespace App\Controllers;

use App\Models\User;
use Support\Logger\Logger;
use Support\Router\JsonResponse;
use Support\Router\View;

class UserController
{

    public function __construct(private Logger $logger)
    {
    }

    public function index(): JsonResponse
    {
        $this->logger->debug('abc');
        $users = User::all();
        return new JsonResponse($users);
    }
}