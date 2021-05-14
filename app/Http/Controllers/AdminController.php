<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Menu;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $user = Auth::user();
        if ($user->username != 'admin') {
            abort(404);
        }
        return view('admin.dashboard', ['user' => $user]);
    }

    public function userIndex(Request $request)
    {
        $request->validate(
            [
                'perPage' => 'nullable|integer',
                'sort' => 'nullable|string'
            ]
        );

        $filter = $request->all();

        $user = Auth::user();

        if ($user->username != 'admin') {
            abort(404);
        }
        $ppg = (int) ($filter['perPage'] ?? 10);
        $sort = $filter['sort'] ?? 'asc';
        $users = User::whereNotIn('username', ['admin'])
            ->orderBy('created_at', $sort)->paginate($ppg);
        
        $totalItems = User::all()->count();

        return view('admin.user',
            [
                'users' => $users,
                'ppg' => $ppg,
                'sort' => $sort,
                'totalItems' => $totalItems,
                'user' => $user
            ]);
    }

    public function userStore(Request $request)
    {
        $customMessages = [
            'required' => 'Enter :attribute',
            'unique' => 'This :attribute has been used'
        ];

        $request->validate(
            [
                'name' => 'required|string',
                'username' => 'required|string',
                'phone' => 'required|unique:users,phone|string',
                'is_order' => 'required|string',
                'no_table' => 'required|string'
            ], $customMessages
        );

        $user = new User();

        $user->name = $request->name;
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->is_order = $request->is_order;
        $user->villa = $request->villa;
        $user->no_table = $request->no_table;
        $user->password = Hash::make($request->phone);
        $user->save();

        toastr()->success('User has been created');
        return redirect()->route('admin-user');
    }

    public function userUpdate(Request $request, $id)
    {
        $customMessages = [
            'required' => 'Enter :attribute',
            'unique' => 'This :attribute has been used'
        ];

        $request->validate(
            [
                'name' => 'required|string',
                'username' => 'required|string',
                'phone' => 'required|unique:users,phone,'.$id.'|string',
                'is_order' => 'required|string'
            ], $customMessages
        );

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->is_order = $request->is_order;
        $user->villa = $request->villa;
        $user->password = Hash::make($request->phone);
        $user->save();

        toastr()->success('User has been updated');
        return redirect()->route('admin-user');
    }

    public function orderIndex(Request $request)
    {
        $request->validate(
            [
                'perPage' => 'nullable|integer',
                'sort' => 'nullable|string'
            ]
        );

        $filter = $request->all();

        $user = Auth::user();

        if ($user->username != 'admin') {
            abort(404);
        }
        $ppg = (int) ($filter['perPage'] ?? 10);
        $sort = $filter['sort'] ?? 'asc';
        $menus = Menu::orderBy('created_at', $sort)->paginate($ppg);
        
        $totalItems = Menu::all()->count();

        return view('admin.order',
            [
                'menus' => $menus,
                'ppg' => $ppg,
                'sort' => $sort,
                'totalItems' => $totalItems,
                'user' => $user
            ]);
    }

    public function commentIndex(Request $request)
    {
        $request->validate(
            [
                'perPage' => 'nullable|integer',
                'sort' => 'nullable|string'
            ]
        );

        $filter = $request->all();

        $user = Auth::user();

        if ($user->username != 'admin') {
            abort(404);
        }

        $ppg = (int) ($filter['perPage'] ?? 10);
        $sort = $filter['sort'] ?? 'asc';
        $comments = Comment::orderBy('created_at', $sort)->paginate($ppg);
        
        $totalItems = Comment::all()->count();

        return view('admin.comment',
            [
                'comments' => $comments,
                'ppg' => $ppg,
                'sort' => $sort,
                'totalItems' => $totalItems,
                'user' => $user
            ]);
    }

    public function userDelete(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        toastr()->success('User has been deleted');
        return redirect()->route('admin-user');
    }

    public function commentDelete(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        toastr()->success('Comment has been deleted');
        return redirect()->route('admin-comment');
    }
}
