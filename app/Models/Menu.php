<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';

    protected $fillable = [
        'kode',
        'nama_menu',
        'deskripsi_menu',
        'url',
        'icon',
        'order',
        'created_by',
        'updated_by'
    ];

    public function menuAkses(): HasMany {
        return $this->hasMany(MenuAkses::class, 'id_menu');
    }
}
