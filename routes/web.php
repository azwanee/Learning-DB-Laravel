<?php

use App\Models\Barang;
use App\Models\Pengguna;
use App\Models\Post;
use App\Models\Produk;
use App\Models\Siswa;
use App\Models\Telepon;
use App\Models\Transaksi;
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
    $post = Post::all();

    return view('tampil_post', compact('post'));
});

Route::get('/barang', function () {
    $barang = Barang::all();

    return view('tampil_barang', compact('barang'));

});

Route::get('/siswa', function () {
    $siswa = Siswa::all();

    return view('tampil_siswa', compact('siswa'));
});

Route::get('/user', function () {
    $data = Pengguna::all();

    return $data;
});

Route::get('/pengguna', function () {
    $pengguna = Pengguna::all();

    return view('tampil_pengguna', compact('pengguna'));
});

Route::get('/telepon', function () {
    $telepon = Telepon::all();

    return view('tampil_telepon', compact('telepon'));
});

Route::get('/merek', function () {
    $produk = Produk::all();

    return view('tampil_data', compact('produk'));
});

Route::get('/trans', function () {
    $transaksi = Transaksi::all();

    return view('tampil_transaksi', compact('transaksi'));
});
