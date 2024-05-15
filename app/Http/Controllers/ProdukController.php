<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ProdukController extends Controller
{
    public function menampilkan()
    {
        $produk = Produk::all();

        return view('Produks/index', compact('produk'));

    }
    public function show($id)
    {
        $produk = Produk::FindOrFail($id);
        return view('Produks/show', compact('produk'));
    }
}
