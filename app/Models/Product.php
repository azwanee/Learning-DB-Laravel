<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'Product', 'Price', 'Description', 'id_brand'];
    public $timestamps = true;

    public function brand()
    {
        return $this->BelongsTo(Brand::class, 'id_brand');
    }

    public function deleteImage(){
        if($this->cover && file_exists(public_path('images/product' . $this->cover))){
            return unlink(public_path('images/product' . $this->cover));
        }
    }
}
