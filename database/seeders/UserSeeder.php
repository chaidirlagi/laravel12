<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            // Dokter
            [
                'nama' => 'Dr. Herry',
                'alamat' => 'Semarang',
                'no_hp' => '08728827882',
                'id_poli' => 1,
                'email' => 'herry.dokter@gmail.com',
                'password' => Hash::make('password1'),
                'role' => 'dokter',
                'no_ktp' => null,
                'no_rm' => null,
            ],
            [
                'nama' => 'Dr. Andi',
                'alamat' => 'Semarang',
                'no_hp' => '08728827883',
                'id_poli' => 2,
                'email' => 'andi.dokter@gmail.com',
                'password' => Hash::make('password1'),
                'role' => 'dokter',
                'no_ktp' => null,
                'no_rm' => null,
            ],
            [
                'nama' => 'Dr. Sinar',
                'alamat' => 'Demak',
                'no_hp' => '0813232323',
                'id_poli' => 3,
                'email' => 'sinar.dokter@gmail.com',
                'password' => Hash::make('password1'),
                'role' => 'dokter',
                'no_ktp' => null,
                'no_rm' => null,
            ],

            // admin
            [
                'nama' => 'Admin',
                'alamat' => 'Semarang',
                'no_hp' => '0833333331',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('password2'),
                'role' => 'admin',
                'id_poli' => null,
                'no_ktp' => null,
                'no_rm' => null,
            ],
                        [
                'nama' => 'Admin',
                'alamat' => 'Semarang',
                'no_hp' => '0833333332',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('password2'),
                'role' => 'admin',
                'id_poli' => null,
                'no_ktp' => null,
                'no_rm' => null,
            ],
                        [
                'nama' => 'Admin',
                'alamat' => 'Semarang',
                'no_hp' => '0833333333',
                'email' => 'admin3@gmail.com',
                'password' => Hash::make('password2'),
                'role' => 'admin',
                'id_poli' => null,
                'no_ktp' => null,
                'no_rm' => null,
            ],


            // Pasien
            [
                'nama' => 'El Budi',
                'alamat' => 'Semarang',
                'no_hp' => '08728827884',
                'email' => 'elbudi.pasien1@gmail.com',
                'password' => Hash::make('password3'),
                'role' => 'pasien',
                'id_poli' => null,
                'no_ktp' => '3201011111000001',
                'no_rm' => 'RM00001',
            ],
            [
                'nama' => 'Reihan',
                'alamat' => 'Semarang',
                'no_hp' => '08738829903',
                'email' => 'reihan.pasien2@gmail.com',
                'password' => Hash::make('password3'),
                'role' => 'pasien',
                'id_poli' => null,
                'no_ktp' => '3201011111000002',
                'no_rm' => 'RM00002',
            ],
            [
                'nama' => 'Centa',
                'alamat' => 'Demak',
                'no_hp' => '087738184366',
                'email' => 'centa.pasien3@gmail.com',
                'password' => Hash::make('password3'),
                'role' => 'pasien',
                'id_poli' => null,
                'no_ktp' => '3201011111000003',
                'no_rm' => 'RM00003',
            ],
        ]);
    }
}
