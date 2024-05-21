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
    
    // #[Validate('required', message: 'Il titolo è necessario')]
    // #[Validate('min:5', message: 'Il titolo deve contenere almeno 5 caratteri')]
    public $title;
    public $price;
    public $body;
    public $category;
    public $article;

    
  
    public $temp_images = [];
  
    public $images = [];

    protected $rules = [
        "title" => "required|min:5",
        'price' => 'required|numeric|min:0.01',
        'body' => 'required|min:10',
        'category' => 'required',
    ];

    public function rules()
    {
        return $this->rules;
    }

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

            dispatch(new ResizeImage($newImage->path, 720, 720));
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
