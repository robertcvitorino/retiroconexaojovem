<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
        'guardian_id',
        'number',
        'is_whatsapp',
        'label',
    ];

    protected $casts = [
        'is_whatsapp' => 'boolean',
    ];

    public function guardian()
    {
        return $this->belongsTo(Guardian::class);
    }
}
