<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Karyawan extends Authenticatable
{
    use HasFactory;

    protected $fillable =  [
        'nip',
        'username',
        'nama',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function menuAkses(): HasMany
    {
        return $this->hasMany(MenuAkses::class, 'id_karyawan');
    }
};
