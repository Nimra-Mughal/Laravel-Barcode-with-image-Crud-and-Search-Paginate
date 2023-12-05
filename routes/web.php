<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class,'welcome'])->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/home',[HomeController::class,'index'])->name('home');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('admin')->group(function () {
    Route::get('/addbrand',[HomeController::class,'addbrand']);
    Route::get('/addproduct',[HomeController::class,'addproduct']);
    Route::get('/viewproduct',[HomeController::class,'viewproduct']);
    Route::get('/viewbrand',[HomeController::class,'viewbrand']);
    Route::post('/addbranddata',[HomeController::class,'addbranddata']);
    Route::post('inserproduct',[HomeController::class,'inserproduct']);
    Route::get('deleteproduct/{id}',[HomeController::class,'deleteproduct']);
    Route::get('updateproduct/{id}',[HomeController::class,'updateproduct']);
    Route::post('insertupdateddata/{id}',[HomeController::class,'insertupdateddata']);
    Route::post('search',[HomeController::class,'viewproduct']);
    Route::get('clear',[HomeController::class,'viewproduct']);

 });

require __DIR__.'/auth.php';
