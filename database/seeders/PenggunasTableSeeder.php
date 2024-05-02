<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penggunas = [
            ['Nama' => 'Ghazwan'],
            ['Nama' => 'Iyas'],
            ['Nama' => 'Ali'],
        ];
// masukkan data ke database
        DB::table('penggunas')->insert($penggunas);

    }
}
