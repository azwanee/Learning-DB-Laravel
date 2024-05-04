<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = ['id', 'nama_pembeli', 'jenis_kelamin'];
    public $timestamps = true;

    public function Transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
