<?php

namespace App\Http\Controllers\Bace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    
}