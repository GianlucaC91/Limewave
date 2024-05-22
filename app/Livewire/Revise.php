<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class Revise extends Component
{   
    public $pending_articles;
    public $rejected_articles;

    public function mount()
    {
        $this->pending_articles = Article::where("is_accepted", null)->get();
        $this->rejected_articles = Article::onlyTrashed()->get();
        
    }

    public function acceptArticle(Article $article)
    {
        $article->setApproved(true);
        $this->mount();
    }

    public function rejectArticle(Article $article)
    {
        $article->delete();
        session()->flash('status', __("messages.adRejected"));
        $this->mount();
    }

    public function restoreArticle($articleId)
    {
        if (auth()->check() && (auth()->user()->is_revisor || auth()->user()->is_admin)) {
            $article = Article::withTrashed()->find($articleId);
            if ($article) {
                $article->restore();
                session()->flash('status', __("messages.adRestored"));
                $this->mount();
            }
        }
    }

    public function deleteArticle($id)
    {
        $article = Article::withTrashed()->find($id);
        if ($article) {
            $article->forceDelete();
            session()->flash("status", __("messages.deletedP"));
            $this->mount();
        }
    }

    public function render()
    {
        return view('livewire.revise');
    }
}
