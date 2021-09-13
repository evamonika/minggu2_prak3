<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;

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
Route::get('/',[HomeController::class,'index']);

// halaman Program studi (route prefix)
Route::prefix('prodi')->group(function(){
  Route::get('/manajemen-informatika', [ProdiController::class, 'mi']);
  Route::get('/teknik-informatika', [ProdiController::class, 'ti']);
});

// halaman news
Route::get('news/{id}', [NewsController::class, 'index']);

// halaman sarana
Route::prefix('sarana')->group(function(){
  Route::get('/perkantoran', [SaranaController::class, 'kantor']);
  Route::get('/laboratorium', [SaranaController::class, 'lab']);
  Route::get('/kelas', [SaranaController::class, 'kelas']);
  Route::get('/lainnya', [SaranaController::class, 'lain']);
});

// about
Route::get('/about',[AboutController::class, 'about']);

// halaman commen
Route:: get('/comment/{nama}/{id}', [CommentController::class,'index']);
