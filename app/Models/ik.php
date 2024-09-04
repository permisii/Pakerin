<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ik extends Authenticatable
{
    use HasFactory;


    protected $fillable =  [
        'id',
        'id_karyawan',
        'tanggal',
    ];
};
