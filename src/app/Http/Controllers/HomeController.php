<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::select('posts.title', 'posts.message', 'posts.created_at', 'posts.updated_at', 'users.name')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->SearchKeyword($request->keyword)
            ->orderBy('created_at', 'desc')
            ->Paginate(5);

        return view('home', compact('posts'));
    }
}
