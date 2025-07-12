<?php

namespace Models;

use Database\Model;

class User extends Model
{
    protected static string $table = 'users';

    public string $first_name;
    public string $last_name;
}