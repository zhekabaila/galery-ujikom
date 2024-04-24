<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Foto;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public string $judul = '';
    public string $deskripsi = '';
    public $lokasi_file;
    public $current_path = null;
    public $foto_id = null;

    public function mount($foto_id) {
        $foto = Foto::find($foto_id);
        $this->foto_id = $foto_id;
        $this->judul = $foto->judul_foto;
        $this->deskripsi = $foto->deskripsi_foto;
        $this->current_path = $foto->lokasi_file;
    }

    public function ubah_foto()
    {
        $this->validate([
            'judul' => 'required|string|max:225',
            'deskripsi' => 'required|string',
            'lokasi_file' => 'image|nullable'
        ]);

        if (isset($this->lokasi_file)) {
            $file = $this->lokasi_file->store(path: 'public');
        } else {
            $file = $this->current_path;
        }

        $isSaved = Foto::find($this->foto_id)->update([
            'judul_foto' => $this->judul,
            'deskripsi_foto' => $this->deskripsi,
            'lokasi_file' => $file,
        ]);

        if ($isSaved) {
            $this->redirect('/', true);
        }
    }

    public function render()
    {
        return view('livewire.update');
    }
}
