<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// USER
route::get('/redirect',[HomeController::class,'redirect']);
route::get('/katalogkamar',[HomeController::class,'katalogkamar']);
route::get('/faq',[HomeController::class,'faq']);
route::get('/tentangkami',[HomeController::class,'tentangkami']);
route::get('/detail_kamar/{id}',[HomeController::class,'detail_kamar']);




// ADMIN
// Halaman Tambah dan Daftar Katalog Kamar
route::get('/view_kamar',[AdminController::class,'view_kamar']);
route::post('/add_kamar',[AdminController::class,'add_kamar']);
route::get('/show_kamar',[AdminController::class,'show_kamar']);
route::get('/update_kamar/{id}',[AdminController::class,'update_kamar']);
route::post('/update_kamar_confirm/{id}',[AdminController::class,'update_kamar_confirm']);
route::get('/delete_kamar/{id}',[AdminController::class,'delete_kamar']);

// Halaman Tambah dan Daftar Kategori Kamar
route::get('/view_category',[AdminController::class,'view_category']);
route::post('/add_category',[AdminController::class,'add_category']);
route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

