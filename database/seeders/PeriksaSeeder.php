<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('periksas')->insert([
            [
                'id_pasien'     => 1, //disesuaikan dengan ID pasien di tabel users
                'id_dokter'     => 2, //disesuaikan dengan ID dokter di tabel users
                'tgl_periksa'   => '2025-03-24 10:00:00',
                'catatan'       => 'Pasien mengalami demam tinggi dan sakit kepala.',
                'biaya_periksa' => 60000,
            ],
            [
                'id_pasien'     => 1, //disesuaikan dengan ID pasien di tabel users
                'id_dokter'     => 2, //disesuaikan dengan ID dokter di tabel users
                'tgl_periksa'   => '2025-03-24 12:00:00',
                'catatan'       => 'Batuk kering.',
                'biaya_periksa' => 40000,
            ]
            ]);
    }
}
