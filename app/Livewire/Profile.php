<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Like;

class Profile extends Component
{
    public $data = [];

    public function mount() {
        $this->data = auth()->user();
    }


    public function like($foto_id)
    {
        $isLiked = Like::where('user_id', auth()->user()->user_id)->where('foto_id', $foto_id);

        if ($isLiked->exists()) {
            $isLiked->first()->delete();
        } else {
            Like::create([
                'user_id' => auth()->user()->user_id,
                'foto_id' => $foto_id,
                'tanggal_like' => now()->format('Y-m-d')
            ]);
        }
    }

    public function is_liked($foto_id) {
        return Like::where('user_id', auth()->user()->user_id)->where('foto_id', $foto_id)->exists();
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
