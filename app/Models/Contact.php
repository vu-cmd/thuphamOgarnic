<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $table='contacts';
    use HasFactory;
      protected $fillable = [
        'fullname',
        'email',
        'message',
        'contact_status',
        'phone', // Thêm dòng này
    ];
}
