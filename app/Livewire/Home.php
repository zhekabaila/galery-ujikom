<?php

namespace App\Livewire;

use App\Models\Foto;

use Livewire\Component;

class Home extends Component
{
    public $posts = [];

    public function mount()
    {
        $this->posts = Foto::latest('foto_id')->get();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
