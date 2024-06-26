<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bill;

class BillDetail extends Model
{
    use HasFactory;
    protected $table='bill_detail';
    protected $primaryKey = 'id_detail';

    public function bill()
    {
        return $this->belongsTo(Bill::class, 'id_bill', 'id_bill');
    }
}
