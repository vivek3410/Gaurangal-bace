<?php

namespace App\Models\bace;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable  = [
        'userid',
        'productid',
        'orderid',
        'productname',
        'productprice',
        'quantity',
        'total',
        'category',
        'subtotal',
        'firstname',
        'lastname',
        'phone',
        'email',
        'flatno',
        'address',
        'landmark',
        'city',
        'pincode',
        'adminnotify'
    ];
}