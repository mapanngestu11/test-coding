<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ktp extends Model
{
    protected $fillable = [
        'no_ktp',
        'nama',
        'tanggal_lahir',
        'alamat',
        'no_kk',
        'jenis_kelamin',
        'agama',
        'pekerjaan',
    ];
}
