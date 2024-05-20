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
    if ($user->is_revisor || $user->is_revisor === null) {
        return redirect('/')->with('status', 'Sei già revisore o la tua richiesta è in attesa, attendi che venga elaborata');
    } else {

    return view('revisor.form', compact('user'));
    }

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
        Mail::to('presto@noreply.com')->send (new AdminMail($contactMail, $user));
        $user->is_revisor = null;
        $user->save();
        return redirect()->back()->with("status","Il messaggio è stato inviato correttamente");
    }

    
    public function makeRevisor(User $user) {
        Artisan::call('limewave:make-revisor', ['email'=>$user->email]);
        return redirect('/')->with('status', 'Utente ' . $user->name . ' è ora revisore');
    }
    
    
    
    // REVISING LOGIC MOVED TO LIVEWIRE/REVISE

    public function dashboard(){
        return view("revisor.dashboard");
    }

    // public function acceptArticle(Article $article) {
    //     $article->setApproved(true);
    //     return redirect()->back()->with("status","Annuncio Accettato");
    // }
    
    // public function rejectArticle(Article $article) {
    //     $article->setApproved(false);
    //     return redirect()->back()->with("status","Annuncio rifiutato");
    // }

    public function showCandidates()
    {
        $candidates = User::where('is_revisor', null)->get();
        return view('revisor.candidates', compact('candidates'));
    }

    public function acceptCandidate(User $user)
    {
        $user->is_revisor = true;
        $user->save();

        return redirect()->route('revisor.candidates')->with('success', 'User accepted as revisor');
    }

    public function rejectCandidate(User $user)
    {
        $user->is_revisor = false;
        $user->save();

        return redirect()->route('revisor.candidates')->with('success', 'User rejected');
    }
}
