<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Menu;
use App\Villa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the homepage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        if (Auth::check()) {
            $user = Auth::user();
            $menuUser = Menu::where('user_id', $user->id)->get();
            $checkMenu = $menuUser->count() < 1 ? false : true;
            $villa = '';
            if ($user->villa != null) {
                $villa = Villa::where('villa_name', $user->villa)->first();
            }
            return view('temps', [
                'user' => $user,
                'comments' => $comments,
                'checkMenu' => $checkMenu,
                'villa' => $villa
            ]);
        }
        return view('temps', ['comments' => $comments]);
    }

    public function storeComment(Request $request)
    {
        $customMessages = [
            'required' => 'Please choose one'
        ];

        $request->validate(
            [
                'name' => 'required|string',
                'content' => 'required|string'
            ], $customMessages
        );

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->content = $request->content;
        $comment->save();

        toastr()->success('Your wish has been added.');
        return redirect()->route('homepage');
    }
}
