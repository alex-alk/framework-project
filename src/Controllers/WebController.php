<?php

namespace App\Controllers;

use App\Models\User;
use Support\Logger\Logger;
use Support\Router\View;

class WebController
{

    public function __construct(private Logger $logger)
    {
    }

    public function index(): View
    {
        $this->logger->debug('abc');
        $users = User::all();
        print_r($users);
        return View::make('home');
    }
}