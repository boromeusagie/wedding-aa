<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Menu;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Excel;

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

    public function submitAttend(Request $request)
    {
        $user = Auth::user();
        $user->attend = $request->attend;
        $user->save();

        if ($request->attend === 'Yes') {
            toastr()->success('You have choosen to attend.');
        } else {
            toastr()->success('You have choosen to not attend.');
        }
        return redirect()->route('homepage');
    }

    public function orderMenu(Request $request)
    {
        $customMessages = [
            'required' => 'Please choose one'
        ];

        $request->validate(
            [
                'appertizer' => 'required|string',
                'main_course' => 'required|string',
                'dessert' => 'required|string',
                'hot_drink' => 'required|string',
                'cold_drink' => 'required|string',
            ], $customMessages
        );

        $user = Auth::user();

        $menu = new Menu();
        $menu->user_id = $user->id;
        $menu->appertizer = $request->input('appertizer');
        $menu->main_course = $request->input('main_course');
        $menu->dessert = $request->input('dessert');
        $menu->hot_drink = $request->input('hot_drink');
        $menu->cold_drink = $request->input('cold_drink');
        $menu->save();

        toastr()->success('You have choosen foods.');
        return redirect()->route('homepage');
    }

    public function showWear()
    {
        $user = Auth::user();
        return view('wear', ['user' => $user]);
    }

    public function storeMua(Request $request)
    {
        $user = Auth::user();
        $user->is_mua = $request->is_mua;
        $user->save();

        if ($request->is_mua === 'Yes') {
            toastr()->success('You have choosen to use MUA.');
        } else {
            toastr()->success('You have choosen to not use MUA.');
        }
        return redirect()->route('homepage');
    }
}
