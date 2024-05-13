<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class UserProfile extends Component
{
    use WithFileUploads;

    public $user;

    #[Validate('required', message: 'Username è necessario')]
    #[Validate('min:3', message: 'Username deve contenere almeno 3 caratteri')]
    public $name;

    #[Validate('required', message: 'Email è necessaria')]
    #[Validate('email', message: 'Inserire un indirizzo email valido')]
    public $email;

    #[Validate('nullable', 'confirmed')]
    #[Validate('min:8', message: 'La password deve contenere almeno 8 caratteri')]
    public $password;

    // MAYBE NOT NEEDED
    // public $password_confirmation;

    #[Validate('nullable', 'image', message: 'Immagine non valida')]
    // #[Validate( 'max:1024', message: 'Immagine troppo grande (max 1 mb)')]
    public $img;

    public function mount()
    {
        $this->user = Auth::user() ?? new User();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    // User profile update
    public function updateUser()
    {

        $this->validate();

        if ($this->img) {
            $this->user->img = $this->img->store('public/img');
        }

        $this->user->name = $this->name;
        $this->user->email = $this->email;
        if ($this->password) {
            $this->user->password = bcrypt($this->password);
        }

        $this->user->save();
        session()->flash("status", "Profilo modificato correttamente");
    }

    // REFRESH USER-PROFILE DATA
    public function refreshUser()
    {
        $this->user = Auth::user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function render()
    {
        return view('livewire.user-profile');
    }
}
