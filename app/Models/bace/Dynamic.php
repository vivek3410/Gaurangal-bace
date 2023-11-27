<?php

namespace App\Models\bace;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dynamic extends Model
{
    use HasFactory;

    protected $fillable  = [
        'dynamic_email',
        'sitename',
        'metatitle',
        'meta_description',
        'meta_keywords',
        'mobile',
        'email',
        'address',
        'facebook',
        'instagram',
        'twitter',
        'google_verification',
        'google_analytic',
        'yatra_description',
        'favicon',
        'logo',
        'footerlogo',
        'bannerimage',
        'bace_description'
    ];

}