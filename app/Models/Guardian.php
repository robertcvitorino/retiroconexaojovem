<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    protected $fillable = [
        'participant_id',
        'name',
        'priority',
    ];

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }
}
