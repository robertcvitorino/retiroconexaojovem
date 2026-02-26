<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    protected $fillable = [
        'support_phone',
        'registration_open',
        'maintenance_mode',
    ];

    protected $casts = [
        'registration_open' => 'boolean',
        'maintenance_mode' => 'boolean',
    ];
}
