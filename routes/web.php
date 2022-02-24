<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BlogController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/ww', 'PagesController@index');
Route::get('/index', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
//Route::get('/blog', [PagesController::class, 'about']);
Route::resource('blog', 'BlogController');
//Route::resource('blog', [BlogController::class]);