<?php

namespace Database\Seeders;

use App\Models\Karyawan;
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
                'nip' => 123,
                'nama' => 'Jakawa',
                'password' => '12345',
            ],
            [
                'nip' => 456,
                'nama' => 'Jikiwi',
                'password' => '12345',
            ],
        ];

        foreach ($data as $d) {
            Karyawan::create($d);
        }
    }
}
