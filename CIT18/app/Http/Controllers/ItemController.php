<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return "List of items";
    }

    public function show($id)
    {
        return "Displaying item with ID: " . $id;
    }
}
