<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeProduct;
class Product extends Model
{
    public function type_products()
    {
        return $this->belongsTo(TypeProduct::class,'TypeProduct_id','id_type');
    }
    use HasFactory;
    protected $primaryKey = 'id_product';
}
