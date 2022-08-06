<?php
use App\Http\Controllers\MyMusicController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/video', [PageController::class, 'musicVideos']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/album', [PageController::class, 'album']);
Route::get('/music', [MyMusicController::class, 'index']);
