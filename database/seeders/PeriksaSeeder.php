<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PeriksaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Ambil data pasien dan dokter dari tabel users
        $dokters = DB::table('users')->where('role', 'dokter')->get();
        $pasiens = DB::table('users')->where('role', 'pasien')->get();

        // Pastikan ada data yang bisa digunakan
        if ($dokters->isEmpty() || $pasiens->isEmpty()) {
            throw new \Exception('Tidak ada data dokter atau pasien di tabel users. Pastikan sudah di-seed.');
        }

        // Generate data daftar_poli sebagai syarat periksa
        $daftar_poli_id = DB::table('daftar_poli')->insertGetId([
            'id_pasien' => $pasiens->first()->id,
            'id_jadwal' => 1, // Pastikan jadwal_periksa dengan ID 1 ada
            'keluhan' => 'Sakit tenggorokan',
            'no_antrian' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert data ke tabel periksas
        DB::table('periksas')->insert([
            [
                'id_daftar_poli' => $daftar_poli_id,
                'tgl_periksa' => '2025-03-24 10:00:00',
                'catatan' => 'Pasien mengalami demam tinggi dan sakit kepala.',
                'biaya_periksa' => 60000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_daftar_poli' => $daftar_poli_id,
                'tgl_periksa' => '2025-03-24 12:00:00',
                'catatan' => 'Batuk kering, perlu antibiotik',
                'biaya_periksa' => 40000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
