<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Like;

class PostCard extends Component
{

    public $data = null;

    public function mount($data)
    {
        $this->data = $data;
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

    public function render()
    {
        return view('livewire.post-card');
    }
}
