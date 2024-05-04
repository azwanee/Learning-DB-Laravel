<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama_pembeli' => 'Ghazwan', 'jenis_kelamin' => 'Laki - Laki'],
            ['nama_pembeli' => 'Adel', 'jenis_kelamin' => 'Perempuan'],
            ['nama_pembeli' => 'Bisma', 'jenis_kelamin' => 'Laki - Laki'],
        ];
// masukkan data ke database
        DB::table('pembelis')->insert($pembelis);

    }
}
