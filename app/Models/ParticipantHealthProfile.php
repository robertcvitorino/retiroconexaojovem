<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipantHealthProfile extends Model
{
    protected $fillable = [
        'participant_id',
        'dietary_restrictions',
        'medications',
        'medication_frequency',
        'allergies',
        'pcd',
        'pcd_details',
    ];

    protected $casts = [
        'pcd' => 'boolean',
    ];

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }
}
