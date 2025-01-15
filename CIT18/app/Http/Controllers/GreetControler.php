<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetControler extends Controller
{
    public function hello() {
        return view('greet');
    }
}