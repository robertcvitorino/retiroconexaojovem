<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShirtSize extends Model
{
    protected $fillable = [
        'label',
    ];

    public function participants()
    {
        return $this->hasMany(Participant::class);
    }
}
