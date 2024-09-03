<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Karyawan;
use App\Models\Menu;
use App\Models\MenuAkses;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('create-menu', function (Karyawan $karyawan, Menu $menu) {
            return $this->hasAccess($karyawan, $menu, 'create');
        });
        Gate::define('read-menu', function (Karyawan $karyawan, Menu $menu) {
            return $this->hasAccess($karyawan, $menu, 'read');
        });
        Gate::define('update-menu', function (Karyawan $karyawan, Menu $menu) {
            return $this->hasAccess($karyawan, $menu, 'update');
        });
        Gate::define('delete-menu', function (Karyawan $karyawan, Menu $menu) {
            return $this->hasAccess($karyawan, $menu, 'delete');
        });
    }

    protected function hasAccess(Karyawan $karyawan, Menu $menu, $permission)
    {
        Log::info("Checking access for user {$karyawan->id} on menu {$menu->id} for permission {$permission}");

        $menuAkses = MenuAkses::where('id_karyawan', $karyawan->id)->where('id_menu', $menu->id)->first();

        Log::info("Menu Access Details:", [
            'karyawan_id' => $karyawan->id,
            'menu_id' => $menu->id,
            'menu_akses' => $menuAkses ? $menuAkses->toArray() : 'No access record found'
        ]);

        if (!$menuAkses?->$permission) {
            Log::warning("User {$karyawan->id} does not have {$permission} permission for menu {$menu->id}");
            return false;
        }

        return true;
        // return $menuAkses ? $menuAkses->$permission === 1 : false;
    }
}
