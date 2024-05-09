<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class ArticleCreate extends Component
{
    #[Validate('required', message: 'Il titolo è necessario')]
    public $title = "";
    #[Validate('required', message: 'Il prezzo è necessario')]
    #[Validate('numeric', message: 'Il prezzo deve essere un numero')]
    public $price = "";
    #[Validate('required', message: 'Una descrizione è necessaria')]
    #[Validate('min:10', message: 'La descrizione deve contenere almeno 10 caratteri')]
    public $body = "";


    public function store()
    {
        $this->validate();
        Article::create([
            "title" => $this->title,
            "price" => $this->price,
            "body" => $this->body,
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.article-create');
    }
}
