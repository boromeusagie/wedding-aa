<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showMenu()
    {
        $user = Auth::user();
        return view('order', ['user' => $user]);
    }

    public function showWear()
    {
        $user = Auth::user();
        return view('wear', ['user' => $user]);
    }
}
