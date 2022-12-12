<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $table = 'sekolah';
    protected $fillable = [
        'nama_sekolah', 'alamat_sekolah', 'kepala_sekolah', 'guru_pamong'
    ];
}
