<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $table = 'absensi';

    protected $fillable = [
        'name',
        'user_id',
        'kelas',
        'gambar',
        'status',
        'pesan',
    ];
}
