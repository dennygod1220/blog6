<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class IndexController extends Controller
{
    public function bg_user()
    {
        $user = User::all();
        var_dump($user);
    }
}
