<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuAkses extends Model
{
    use HasFactory;

    protected $table = 'menu_akses';

    protected $fillable = [
        'id_menu',
        'id_karyawan',
        'create',
        'read',
        'update',
        'delete',
        'etc',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'create' => 'boolean',
        'read' => 'boolean',
        'update' => 'boolean',
        'delete' => 'boolean',
        'etc' => 'boolean',
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'id_karyawan');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }
}
