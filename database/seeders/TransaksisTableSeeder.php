<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            ['id_barang' => 1, 'id_pembeli' => 1, 'jumlah' => 5, 'tanggal' => '2017/08/20'],
            ['id_barang' => 2, 'id_pembeli' => 2, 'jumlah' => 3, 'tanggal' => '2017/08/20'],
            ['id_barang' => 3, 'id_pembeli' => 3, 'jumlah' => 7, 'tanggal' => '2017/08/20'],
            ['id_barang' => 3, 'id_pembeli' => 3, 'jumlah' => 5, 'tanggal' => '2017/08/20'],
            ['id_barang' => 1, 'id_pembeli' => 1, 'jumlah' => 3, 'tanggal' => '2017/08/20'],
            ['id_barang' => 2, 'id_pembeli' => 2, 'jumlah' => 7, 'tanggal' => '2017/08/20'],
        ];
// masukkan data ke database
        DB::table('transaksis')->insert($transaksis);

    }
}
