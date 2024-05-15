<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class Feed extends Component
{
    public function render()
    {
        
        $articles = Article::where('is_accepted', true)->orderBy('updated_at', 'desc')->take(6)->get();

        return view('livewire.feed', compact('articles'));
    }
}
