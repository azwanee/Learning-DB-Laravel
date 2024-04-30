<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'Nama', 'Jenis_Kelamin', 'alamat', 'agama', 'telepon', 'email'];
    public $timestamps = true;
}
