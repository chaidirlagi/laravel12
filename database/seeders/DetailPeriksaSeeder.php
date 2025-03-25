<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_periksas')->insert([
            [
                'id_periksa'    => 2, //sesuaikan dengan ID di tabel periksas
                'id_obat'       => 1, //sesuaikan dengan ID di table obats
            ],
            [
                'id_periksa'    => 2, //sesuaikan dengan ID di tabel periksas
                'id_obat'       => 2, //sesuaikan dengan ID di table obats
            ],
            [
                'id_periksa'    => 1, //sesuaikan dengan ID di tabel periksas
                'id_obat'       => 1, //sesuaikan dengan ID di table obats
            ]
            ]);
    }
}
