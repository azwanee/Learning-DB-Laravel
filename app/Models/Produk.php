<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'Nama_Produk', 'Jumlah', 'Tanggal_Produksi', 'id_merek'];
    public $timestamps = true;

    public function merek()
    {
        return $this->BelongsTo(Merek::class, 'id_merek');
    }
}
