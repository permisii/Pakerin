<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            'karyawan_nip' => 123,
            'karyawan_nama' => 'Jakawa',
            'password' => Hash::make('12345'),

        ],
        [
            'karyawan_nip' => 456,
            'karyawan_nama' => 'Jikiwi',
            'password' => Hash::make('12345'),
        ],
    ];
    DB::table('karyawan')->insert($data);
    }
}
