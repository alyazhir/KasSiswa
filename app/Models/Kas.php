<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    use HasFactory;

    protected $table = 'kas';
    protected $fillable = ['siswa_id', 'tanggal', 'jumlah', 'keterangan'];

    // Relasi: pembayaran kas dimiliki oleh 1 siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
