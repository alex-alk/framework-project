<?php

namespace Controllers;

use Logger\Logger;
use Models\User;
use Router\View;

class WebController
{
    public function index(): View
    {
        $logger = new Logger();
        $logger->debug('abc');
        $users = User::all();
        print_r($users);
        return View::make('home');
    }
}