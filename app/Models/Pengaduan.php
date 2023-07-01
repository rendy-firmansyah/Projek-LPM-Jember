<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduans';

    protected $fillable = [
        'nama_pelapor',
        'nik',
        'usia',
        'telepon',
        'tanggal_pengaduan',
        'deskripsi_laporan',
        'status'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }   
}
