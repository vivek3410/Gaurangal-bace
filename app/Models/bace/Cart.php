<?php

namespace App\Models\bace;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable  = [
        'bookname',
        'bookprice',
        'userid',
        'sku',
        'bookimage',
        'shortdesc',
        'longdesc',
        'weight',
        'dimensions',
        'category',
        'productid',
        'quantity',
        'total'
    ];
}