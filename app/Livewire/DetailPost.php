<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Foto;
use App\Models\Komentar;

class DetailPost extends Component
{
    public $post = null;
    public $isi_komentar = '';

    public function mount($foto_id)
    {
        $this->post = Foto::find($foto_id);
    }

    public function save_komentar()
    {
        Komentar::create([
            'foto_id' => $this->post->foto_id,
            'user_id' => auth()->user()->user_id ?? null,
            'isi_komentar' => $this->isi_komentar,
            'tanggal_komentar' => now()->format('Y-m-d')
        ]);

        $this->reset('isi_komentar');
    }


    public function render()
    {
        return view('livewire.detail-post');
    }
}
