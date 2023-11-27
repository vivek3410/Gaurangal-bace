<?php

namespace App\Models\bace;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'price',
      'category',
      'sku',
      'bookimage',
      'shortdesc',
      'longdesc',
      'weight',
      'dimensions'  
    ];
}