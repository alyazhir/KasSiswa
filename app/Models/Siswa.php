<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $fillable = ['nama', 'nis', 'jenis_kelamin', 'alamat'];

    // Relasi: 1 siswa punya banyak pembayaran kas
    public function kas()
    {
        return $this->hasMany(Kas::class);
    }
}
