<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = "profiles";
    protected $fillable = [
        'name',
        'SAC',
        'SIC',
        'alamat',
        'penempatan',
        'latitude',
        'longtitude',
        'power_consume',
        'power_output',
        'coverage',
        'tahun_install',
        'tahun_comm',
        'merk',
        'negara',
        'type',
    ];
}
