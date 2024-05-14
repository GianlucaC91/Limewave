<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Middleware\IsRevisor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{

    public function revisorForm ()
{
    return view('revisor.form');

}
// Invio Mail
    public function sendEmail (Request $request) {
        $contactMail = [
            'name'=> $request->input('name'),
            'email'=> $request->input('email'),
            'description'=> $request->input('description'),
        ];
        Mail::to('presto@noreply.com')->send (new AdminMail($contactMail));
        return redirect()->back()->with("status","Il messaggio è stato inviato correttamente");
    }

    public function dashboard(){
        $article_to_check = Article::where("is_accepted", null)->first();
        return view("revisor.dashboard", compact("article_to_check"));
    }

    public function acceptArticle(Article $article) {
        $article->setApproved(true);
        
    }

    public function rejectArticle(Article $article) {
        $article->setApproved(false);
        return redirect()->back()->with("status","Annuncio rifiutato");
    }
}
