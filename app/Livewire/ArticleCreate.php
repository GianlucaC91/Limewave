<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Validate;

class ArticleCreate extends Component
{
    #[Validate('required', message: 'Il titolo è necessario')]
    #[Validate('min:5', message: 'Il titolo deve contenere almeno 5 caratteri')]
    public $title = "";
    #[Validate('required', message: 'Il prezzo è necessario')]
    #[Validate('numeric', message: 'Il prezzo deve essere un numero')]
    #[Validate('min:0.01', message: 'Il prezzo non può essere zero')]
    public $price = "";
    #[Validate('required', message: 'Una descrizione è necessaria')]
    #[Validate('min:10', message: 'La descrizione deve contenere almeno 10 caratteri')]
    public $body = "";
    #[Validate('required', message: 'La categoria è necessaria')]
    public $category="";

    public function store()
    {
        $this->validate();
        
        Article::create([
            "title" => $this->title,
            "price" => $this->price,
            "body" => $this->body,            
            "user_id"=> Auth::user()->id,
            "category_id"=>$this->category
        ]);

        
        $this->reset();
        session()->flash('status', "Annuncio inserito con successo");
        
    }

    public function render()
    {   
        $categories = Category::all();
        return view('livewire.article-create', compact('categories'));
    }
}
