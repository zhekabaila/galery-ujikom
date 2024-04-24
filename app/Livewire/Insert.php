<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Foto;
use Livewire\WithFileUploads;

class Insert extends Component
{
    use WithFileUploads;

    public string $judul = '';
    public string $deskripsi = '';
    public $lokasi_file;

    public function save_foto()
    {
        $this->validate([
            'judul' => 'required|string|max:225',
            'deskripsi' => 'string',
            'lokasi_file' => 'required|image'
        ]);

        $response = $this->lokasi_file->store(path: 'public');

        $isSaved = Foto::create([
            'judul_foto' => $this->judul,
            'deskripsi_foto' => $this->deskripsi,
            'tanggal_unggah' => now()->format('Y-m-d'),
            'lokasi_file' => $response,
            'user_id' => auth()->user()->user_id
        ]);

        if ($isSaved) {
            $this->redirect('/', true);
        }
    }

    public function render()
    {
        return view('livewire.insert');
    }
}
