<?php

namespace App\Models\bace;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yatra extends Model
{
    use HasFactory;

    protected $fillable = [
        'yatraimage',
        'description',
        'title',
    ];
}