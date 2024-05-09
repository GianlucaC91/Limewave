<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreate extends Component
{

    public $title;
    public $price;
    public $body;

    public function create (){
        Article::create([
            "title"=> $this->title,
            "price"=> $this->price,
            "body"=> $this->body,
        ]);
        
        $this->reset();
    }

    public function render()
    {
        return view('livewire.article-create');
    }
}
