<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['Nama' => 'Ghazwan', 'Jenis_Kelamin' => 'Laki - Laki', 'alamat' => 'Bandung', 'agama' => 'Islam', 'telepon' => 2618, 'email' => 'ghazwan@gmail.com'],
            ['Nama' => 'Iyas', 'Jenis_Kelamin' => 'Laki - Laki', 'alamat' => 'Bandung', 'agama' => 'Kristen', 'telepon' => 1111, 'email' => 'iyas@gmail.com'],
            ['Nama' => 'Rafly', 'Jenis_Kelamin' => 'Laki - Laki', 'alamat' => 'Bandung', 'agama' => 'Islam', 'telepon' => 2222, 'email' => 'rafly@gmail.com'],
            ['Nama' => 'Ali', 'Jenis_Kelamin' => 'Laki - Laki', 'alamat' => 'Bandung', 'agama' => 'Kristen', 'telepon' => 3333, 'email' => 'ali@gmail.com'],
            ['Nama' => 'Ksatria', 'Jenis_Kelamin' => 'Laki - Laki', 'alamat' => 'Bandung', 'agama' => 'Islam', 'telepon' => 4444, 'email' => 'ksatria@gmail.com'],
            ['Nama' => 'Bisma', 'Jenis_Kelamin' => 'Laki - Laki', 'alamat' => 'Bandung', 'agama' => 'Islam', 'telepon' => 5555, 'email' => 'bisma@gmail.com'],
            ['Nama' => 'Radin', 'Jenis_Kelamin' => 'Laki - Laki', 'alamat' => 'Bandung', 'agama' => 'Kristen', 'telepon' => 6666, 'email' => 'radin@gmail.com'],
            ['Nama' => 'Rasya', 'Jenis_Kelamin' => 'Laki - Laki', 'alamat' => 'Bandung', 'agama' => 'Islam', 'telepon' => 7777, 'email' => 'rasya@gmail.com'],
            ['Nama' => 'Abdu', 'Jenis_Kelamin' => 'Laki - Laki', 'alamat' => 'Bandung', 'agama' => 'Kristen', 'telepon' => 8888, 'email' => 'abdu@gmail.com'],
            ['Nama' => 'zidni', 'Jenis_Kelamin' => 'Laki - Laki', 'alamat' => 'Bandung', 'agama' => 'Islam', 'telepon' => 9999, 'email' => 'zidni@gmail.com'],
        ];
        // masukkan data ke database
        DB::table('siswas')->insert($siswas);

    }
}
