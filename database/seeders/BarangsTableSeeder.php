<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['Nama_Barang' => 'Pensil', 'Jumlah_Barang' => 10],
            ['Nama_Barang' => 'Pulpen', 'Jumlah_Barang' => 10],
            ['Nama-Barang' => 'Penggaris', 'Jumlah_Barang' => 10],
        ];
// masukkan data ke database
        DB::table('barangs')->insert($barangs);
    }
}
