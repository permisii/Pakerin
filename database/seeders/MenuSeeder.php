<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ]
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
