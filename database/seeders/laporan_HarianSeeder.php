<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class laporan_HarianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [   'laporan_id' => 1,
            'karyawan_id' => '1',
            'no_PK' => 'J00001',
            'masalah' => "1. Mouse tidak menyala\n2. CCTVnya tidak menoleh\n3. Printer warnanya ngeblok\n",
            'penanganan' => "1. Mouse ganti kabel\n2. CCTV ganti lensa\n3. Printer ganti body",
            'material' => "1. kabel\n2. sparepat\n3. besi",
            'satuan' => "2\n3\n4",
            'hasil pengerjaan' => 'sempurna luar biasa',
            'persen' => '100',
        ],
        [   'laporan_id' => 2,
            'karyawan_id' => '1',
            'no_PK' => 'J00002',
            'masalah' => "1. Mouse ganti pemilik\n2. CCTV ganti pemilik\n3. Printer ganti pemilik",
            'material' => "1. sukma\n2. dino\n3. jociwi",
            'material' => 'sparepat',
            'satuan' => "2\n5\n15",
            'hasil pengerjaan' => 'sempurna luar biasa',
            'persen' => '100',
        ]
    ];

    }
}
