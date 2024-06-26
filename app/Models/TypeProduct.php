<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class TypeProduct extends Model
{
     public function products()
    {
        return $this->belongsTo(Product::class,'TypeProduct_id','id_product');
    }
    use HasFactory;
}
