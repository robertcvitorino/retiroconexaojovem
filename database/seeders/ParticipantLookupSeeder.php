<?php

namespace Database\Seeders;

use App\Models\ReferralSource;
use App\Models\ShirtSize;
use Illuminate\Database\Seeder;

class ParticipantLookupSeeder extends Seeder
{
    public function run(): void
    {
        foreach (['PP', 'P', 'M', 'G', 'GG', 'XG', 'Other'] as $label) {
            ShirtSize::query()->firstOrCreate(['label' => $label]);
        }

        foreach (['Instagram', 'WhatsApp', 'Friend', 'Parish', 'Other'] as $name) {
            ReferralSource::query()->firstOrCreate(['name' => $name]);
        }
    }
}
