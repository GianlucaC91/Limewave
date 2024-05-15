<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Middleware\IsRevisor;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{

    public function revisorForm (){
    $user = Auth::user();
    return view('revisor.form', compact('user'));

}
// Invio Mail
    public function sendEmail (Request $request) {

        $validated = $request->validate([
            'name' => 'required|max:255|min:3',
            'email' => 'required',
            'description' => 'required|min:10',
        ]);        

        $user = Auth::user();
        
        $contactMail = [
            'name'=> $request->input('name'),
            'email'=> $request->input('email'),
            'description'=> $request->input('description'),            
        ];
        return view("revisor.dashboard", compact("article_to_check"));
    }

    public function acceptArticle(Article $article) {
        $article->setApproved(true);
        return redirect()->back()->with("status","Annuncio Accettato");
    }

    public function rejectArticle(Article $article) {
        $article->setApproved(false);
        return redirect()->back()->with("status","Annuncio rifiutato");
    }

    public function makeRevisor(User $user) {
        Artisan::call('limewave:make-revisor', ['email'=>$user->email]);
        return redirect('/')->with('status', 'Utente ' . $user->name . ' è ora revisore');
    }
}
