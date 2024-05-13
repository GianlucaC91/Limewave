<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class CategoryCounter extends Component
{
    #[On('category-update')]
    public function render()
    {           
        return view('livewire.category-counter');
    }
}
