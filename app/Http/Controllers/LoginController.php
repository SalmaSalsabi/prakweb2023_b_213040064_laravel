<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controllers
{
    public function index() {
        return view('login.index', [
            'title' => 'login',
            'active' => 'login',
        ]);
    }

}