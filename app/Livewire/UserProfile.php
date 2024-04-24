<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserProfile extends Component
{

    public $data = null;

    public function mount($username) {
        if (auth()->check() && $username === auth()->user()->username) {
            $this->redirect('/profile', true);
        }

        $this->data = User::where('username', $username)->first();
    }

    public function render()
    {
        return view('livewire.user-profile');
    }
}
