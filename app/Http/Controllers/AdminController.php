<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function commentDelete(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        toastr()->success('Comment has been deleted');
        return redirect()->route('admin-comment');
    }
}
