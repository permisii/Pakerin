<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'ik_id' => 1,
                'no_PK' => 'J00001',
                'karyawan_id' => '1',
                'daftar_pekerjaan' => "1. Menyembuhkan Mouse\n2. Menyembuhkan CCTV\n3. Menyembuhkan Printer\n",
                'tanggal' => date('Y-m-d'),
            ],
            [
                'ik_id' => 2,
                'no_PK' => 'J00002',
                'karyawan_id' => '2',
                'daftar_pekerjaan' => "1. Menyembuhkan Mouse\n2. Menyembuhkan CCTV\n3. Menyembuhkan Printer\n",
                'tanggal' => date('Y-m-d'),
            ]

        ];
    }
}
