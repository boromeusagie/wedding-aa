<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function showMenu()
    {
        return view('order');
    }

    public function showWear()
    {
        return view('wear');
    }
}
