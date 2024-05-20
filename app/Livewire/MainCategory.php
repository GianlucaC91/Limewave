<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class MainCategory extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::withCount('acceptedArticles')
            ->orderByDesc('accepted_articles_count')
            ->take(4)
            ->get();
    }

    public function render()
    {
        return view('livewire.main-category');
    }
}
