<?php

namespace Database\Seeders;

use App\Models\MenuAkses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuAksesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $akses = [
            [
                'id_menu' => 1,
                'id_karyawan' => 1,
                'create' => 1,
                'read' => 1,
                'update' => 1,
                'delete' => 1,
                'etc' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'id_menu' => 2,
                'id_karyawan' => 1,
                'create' => 1,
                'read' => 1,
                'update' => 1,
                'delete' => 1,
                'etc' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ],
        ];

        foreach ($akses as $a) {
            MenuAkses::create($a);
        }
    }
}
