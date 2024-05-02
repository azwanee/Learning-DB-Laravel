<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $telepons = [
            ['Nomor' => '2618', 'pengguna_id' => 1],
            ['Nomor' => '1111', 'pengguna_id' => 2],
            ['Nomor' => '2222', 'pengguna_id' => 3],
        ];
// masukkan data ke database
        DB::table('telepons')->insert($telepons);

    }
}
