<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama'      => 'Dr. Herry',
                'alamat'    => 'Semarang',
                'no_hp'     => '08728827882',
                'email'     => 'herry.dokter@email.com',
                'password'  => hash::make('password'),
                'role'      => 'dokter'
            ],
            [
                'nama'      => 'Dr. Andi',
                'alamat'    => 'Semarang',
                'no_hp'     => '08728827883',
                'email'     => 'andi.dokter@email.com',
                'password'  => hash::make('password'),
                'role'      => 'dokter'
            ],
            [
                'nama'      => 'El Budi',
                'alamat'    => 'Semarang',
                'no_hp'     => '08728827884',
                'email'     => 'elbudi.pasien@email.com',
                'password'  => hash::make('password'),
                'role'      => 'pasien'
            ]
            ]);
    }
}
