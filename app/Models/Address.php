<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'participant_id',
        'street',
        'number',
        'complement',
        'district',
        'city',
        'state',
        'zip_code',
    ];

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }
}
