<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\BillDetail;

class Bill extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_bill';
    protected $table='bills';
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }
    
     public function billDetails()
    {
        return $this->hasMany(BillDetail::class, 'id_bill', 'id_bill');
    }
}
