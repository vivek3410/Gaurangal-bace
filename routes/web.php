<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\bace\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[HomeController::class,'Home'])->name('/');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Home Controller

Route::get('cart',[HomeController::class,'cart'])->name('cart');
Route::get('checkout',[HomeController::class,'checkout'])->name('checkout');
Route::get('bookdetails/{id}',[HomeController::class,'bookdetails'])->name('bookdetails');
Route::get('alumni',[HomeController::class,'alumni'])->name('alumni');
Route::get('allseminars',[HomeController::class,'allseminars'])->name('seminars');
Route::get('sundayprogram',[HomeController::class,'sundayprogram'])->name('sundayprogram');
Route::get('youthtraining',[HomeController::class,'youthtraining'])->name('youthtraining');
Route::get('events',[HomeController::class,'events'])->name('events');
Route::get('allbooks',[HomeController::class,'allbooks'])->name('allbooks');
Route::get('yatras',[HomeController::class,'yatras'])->name('yatras');
Route::get('setproductid',[HomeController::class,'setproductid'])->name('setproductid');

require __DIR__.'/auth.php';
