<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $table = 'like_foto';
    protected $primaryKey = 'like_id';
    public $timestamps = false;

    protected $fillable = [
        'foto_id',
        'user_id',
        'tanggal_like'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function foto()
    {
        return $this->belongsTo(Foto::class, 'foto_id', 'foto_id');
    }
}
