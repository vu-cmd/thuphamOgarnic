<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bill;

class Customer extends Model
{
    use HasFactory;
    protected $table='customer';
    protected $primaryKey = 'id_customer';

     public function bills()
    {
        return $this->hasMany(Bill::class, 'id_customer', 'id_customer');
    }
}
