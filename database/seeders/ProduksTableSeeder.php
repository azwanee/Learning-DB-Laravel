<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['Nama_Produk' => 'Toyota Supra', 'Jumlah' => 11, 'Tanggal_Produksi' => '2016/08/18', 'id_merek' => 1],
            ['Nama_Produk' => 'Kijang Inova', 'Jumlah' => 11, 'Tanggal_Produksi' => '2017/08/20', 'id_merek' => 1],
            ['Nama_Produk' => 'Honda Beat', 'Jumlah' => 11, 'Tanggal_Produksi' => '2017/08/20', 'id_merek' => 2],
            ['Nama_Produk' => 'Honda Vario', 'Jumlah' => 11, 'Tanggal_Produksi' => '2017/08/20', 'id_merek' => 2],
            ['Nama_Produk' => 'Zx25r', 'Jumlah' => 11, 'Tanggal_Produksi' => '2017/08/20', 'id_merek' => 3],
            ['Nama_Produk' => 'Zx14r', 'Jumlah' => 11, 'Tanggal_Produksi' => '2017/08/20', 'id_merek' => 3],
        ];
        // masukkan data ke database
        DB::table('produks')->insert($produks);

    }
}
