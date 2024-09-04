<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                'kode' => 'K01',
                'nama_menu' => 'Karyawan',
                'deskripsi_menu' => 'Data karyawan',
                'url' => 'karyawans.index',
                'icon' => 'fas fa-user',
                'order' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'kode' => 'K02',
                'nama_menu' => 'Menu akses',
                'deskripsi_menu' => 'Daftar menu akses',
                'url' => 'menu-akses.index',
                'icon' => 'fas fa-user-lock',
                'order' => 1,
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'kode' => 'K03',
                'nama_menu' => 'Instruksi Kerja',
                'deskripsi_menu' => 'Data IK',
                'url' => 'ik.index',
                'icon' => 'fas fa-user-lock',
                'order' => 1,
                'created_by' => 1,
                'updated_by' => 1

            ],
            [
                'kode' => 'K04',
                'nama_menu' => 'Laporan Harian',
                'deskripsi_menu' => 'Data Laporan Harian',
                'url' => 'laporan.index',
                'icon' => 'fas fa-user-lock',
                'order' => 1,
                'created_by' => 1,
                'updated_by' => 1

            ]
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
