<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class Revise extends Component
{   
    public $article_to_check;  
    
    public function dashboard(){
        $article_to_check = Article::where("is_accepted", null)->first();
        return view("livewire.revise", compact("article_to_check"));
    }
    
    
    public function acceptArticle(Article $article) {
        $article->setApproved(true);
        
    }
    
    public function rejectArticle(Article $article) {
        $article->setApproved(false);
        session()->flash('status', 'Post successfully updated.');
        
    }
    
    public function render()
    {
        $this->article_to_check = Article::where("is_accepted", null)->get();
        return view('livewire.revise');
    }

    
    public function undoApproval($articleId)
    {
        $article = Article::find($articleId);
        if ($article) {
            $article->is_accepted = null;
            $article->save();
            session()->flash('status', 'Annuncio rifiutato.');
        }
    }
}
