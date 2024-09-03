<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SidebarController extends Controller
{
    public static function getUserMenus() {
        $user = Auth::user();

        // dd($user);

        if(!$user) return;

        $menus = Menu::whereHas('menuAkses', function($query) use ($user) {
            $query->where('id_karyawan', $user->id)->where('read', 1);
        })->get();

        return $menus;
    }
}
