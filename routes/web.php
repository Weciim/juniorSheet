<?php
use App\Models\Song;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongsController;
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

Route::get('/song','SongsController@home');
Route::get('/song/{id}','SongsController@song')->name('song');
Route::get('/song/take/create','SongsController@create');
Route::post('/song/create/treat','SongsController@treat');