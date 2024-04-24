<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $table = 'foto';
    protected $primaryKey = 'foto_id';
    public $timestamps = false;

    protected $fillable = [
        'judul_foto',
        'deskripsi_foto',
        'user_id',
        'tanggal_unggah',
        'lokasi_file'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'foto_id', 'foto_id');
    }

    public function like()
    {
        return $this->hasMany(Like::class, 'foto_id', 'foto_id');
    }
}
