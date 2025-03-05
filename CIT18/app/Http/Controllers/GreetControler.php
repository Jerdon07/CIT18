<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Activity: Simple Routing to Views
class GreetControler extends Controller
{
    public function hello() {
        return view('greet');
    }
}