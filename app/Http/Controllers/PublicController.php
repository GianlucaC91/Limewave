<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        $articles = Article::orderBy('created_at','desc')->get();
        return view('welcome', compact('articles'));
    }

    public function searchArticles(Request $request) {
        $articles = Article::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view('search.results', compact('articles'));
    }

    public function setLanguage($lang){
        session()->put("locale", $lang);
        return redirect()->back();
    }
}
