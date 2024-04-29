<?php

use App\Models\Barang;
use App\Modes\Post;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testmodel', function () {
    $data = Post::all();
    return $data;
});

Route::get('/barang', function () {
    $data = Barang::all();
    return $data;
});
