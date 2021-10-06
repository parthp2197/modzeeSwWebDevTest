<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotographerController;
use App\Http\Controllers\AlbumController;


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

Route::get('/', function () {
    return view('welcome');
});

//--------------------------Photographer---------------------
Route::resource('photographers', PhotographerController::class);


//--------------------------Albums---------------------
Route::get('photographers/{photographer_id}/albums', [AlbumController::class, 'getAlbumsByPhotographer']);
// Route::resource('photpgraphers/{photographer_id}/albums', AlbumController::class);
