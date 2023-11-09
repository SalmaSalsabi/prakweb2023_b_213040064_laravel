<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controllers
{
    public function index() {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'Register',

        ]);
    }
}
