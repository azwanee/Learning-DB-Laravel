<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barang2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang2s = [
            ['nama_barang' => 'Pensil', 'harga' => 10000, 'stock' => 100],
            ['nama_barang' => 'Pulpen', 'harga' => 10000, 'stock' => 100],
            ['nama_barang' => 'Penggaris', 'harga' => 10000, 'stock' => 100],
        ];
// masukkan data ke database
        DB::table('barang2s')->insert($barang2s);

    }
}
