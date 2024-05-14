<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function dashboard(){
        $article_to_check = Article::where("is_accepted", null)->first();
        return view("revisor.dashboard", compact("article_to_check"));
    }

    public function acceptArticle(Article $article) {
        $article->setApproved(true);
        return redirect()->back()->with("status","Annuncio accettato");
    }

    public function rejectArticle(Article $article) {
        $article->setApproved(false);
        return redirect()->back()->with("status","Annuncio rifiutato");
    }
}
