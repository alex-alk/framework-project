<?php

namespace Controllers;

use Logger\Logger;
use Models\User;
use Router\View;

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