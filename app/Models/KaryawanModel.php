<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class userModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'kayawan';
    public $timestamps = true;
    protected $primaryKey = 'karyawan_nip';

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

};
