<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// halaman home
Route::get('/',[PageController::class,'homePage']);

// halaman Program studi (route prefix)
Route::prefix('prodi')->group(function(){
  Route::get('/manajemen-informatika', function(){
    return "Prodi Manajemen Informatika";
  });
  Route::get('/teknik-informatika', function(){
    return "Prodi Teknik Informatika";
  });
});

// halaman news
Route::get('newsPage/{id}', [PageController::class, 'newsPage']);

// halaman sarana
Route::prefix('sarana')->group(function(){
  Route::get('/perkantoran', function(){
    return "Perkantoran";
  });
  Route::get('/laboratorium', function(){
    return "Laboratorium";
  });
  Route::get('/kelas', function(){
    return "Ruangan";
  });
  Route::get('/lainnya', function(){
    return "Sarana yang lainnya";
  });
});

// about
Route::get('aboutUs', function(){
  echo "[2031710017] Eva Monika Septiana";
});

// halaman commen
Route:: get('{nama}/{id}', [PageController::class,'commentPage']);
