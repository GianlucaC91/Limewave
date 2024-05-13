<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function profile()
    {
        $user = auth()->user();
        $articles = Article::all();

        return view('user.profile', compact("user","articles"));
    }

    public function userProfile($user)
    {
        $user = User::findOrFail($user);
        $articles = Article::all();
        return view("livewire.user-profile", compact("user", "articles"));
    }
}
