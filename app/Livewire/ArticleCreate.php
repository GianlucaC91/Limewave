<?php

namespace App\Livewire;

use App\Jobs\CropImage;
use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ArticleCreate extends Component
{
    use WithFileUploads;
    
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
    public $category = "";
    public $article;

    
  
    public $temp_images = [];
  
    public $images = [];


    public function store()
    {
    
        $this->validate();

        $adminAccept = null ;
         if (Auth::user()->is_admin) {
            $adminAccept = true;
        };

        $article = Article::create([
            "title" => $this->title,
            "price" => $this->price,
            "body" => $this->body,
            "user_id" => Auth::user()->id,
            "category_id" => $this->category,
            "is_accepted" => $adminAccept,
        ]);

        foreach ($this->images as $image) {
            $newFileName= "article/{$article->id}";
            $path = $image->store($newFileName, 'public');
            $newImage= $article->images()->create(["path"=>$path]);

            dispatch(new ResizeImage($newImage->path, 286, 286));
            dispatch(new CropImage($newImage->path, 300, 300));
        }

        File::deleteDirectory(storage_path("/app/livewire-tmp"));
       
        $this->dispatch('category-update');
        
        $this->reset();

        session()->flash('status', "Annuncio inserito con successo");
    }

    // TEMPORARY IMAGES SHOWN
    public function updatedTempImages() {
        
        foreach ($this->temp_images as $image) {
            $this->images[] = $image;
        }
    }

    
    // TEMPORARY IMAGES REMOVAL
    public function removeImage($key) {
        
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }


    public function render()
    {
        $categories = Category::all();
        return view('livewire.article-create', compact('categories'));
    }
}
