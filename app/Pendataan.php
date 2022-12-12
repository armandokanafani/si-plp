<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendataan extends Model
{
    protected $table = 'pendataan';
    protected $fillable = [
        'nama', 'nim', 'user_id', 'sekolah', 'peminatan', 'dospem', 'pamong', 'status_koordinator', 'status_pamong'
    ];
}
