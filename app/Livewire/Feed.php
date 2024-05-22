<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class Feed extends Component
{
    public $articles;

    public function mount()
    {
        $this->articles = Article::where('is_accepted', true)
            ->orderBy('updated_at', 'desc')
            ->take(6)
            ->get();
    }

    public function render()
    {
        
        $articles = Article::where('is_accepted', true)->orderBy('updated_at', 'desc')->take(6)->get();

        return view('livewire.feed', compact('articles'));
    }

    public function undoApproval($articleId)
{
    if (auth()->check()) {
        $article = Article::find($articleId);
        if ($article) {
            $article->update(['is_accepted' => null]);
            session()->flash('status', __("messages.adRejected"));
            $this->mount(); // Reload the articles after undoing approval
        }
    } else {
        session()->flash('status', __("messages.approval"));
    }
}
}
