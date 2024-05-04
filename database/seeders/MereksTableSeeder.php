<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MereksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mereks = [
            ['Nama_Merek' => 'Toyota'],
            ['Nama_Merek' => 'Honda'],
            ['Nama_Merek' => 'Kawasaki'],
        ];
// masukkan data ke database
        DB::table('mereks')->insert($mereks);

    }
}
