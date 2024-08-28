<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Manajemen User',
            'list' => ['Home', 'User']
        ];

        $page = (object) [
            'title' => 'Daftar User yang terdaftar dalam sistem',
        ];

        $activeMenu = 'Karyawan';

        // $nip = KaryawanModel::all();


        // return view('karyawan.index', [
        //     'breadcrumb' => $breadcrumb,
        //     'page' => $page,
        //     'level' => $level,
        //     'activeMenu' => $activeMenu,
        //     'user' => KaryawanModel::all()
        // ]);
    }
}
