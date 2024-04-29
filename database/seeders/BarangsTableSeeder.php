<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ['nama' => 'Kopi', 'jumlah' => '10'],
            ['nama' => 'Susu', 'jumlah' => '20'],
            ['nama' => 'Gula', 'jumlah' => '30']
        ];
    // masukkan data ke database
    DB::table('barangs')->insert($barangs);

    }
}
