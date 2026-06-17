<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class SatelliteSensor extends Pivot
{
    protected $table = 'satellite_sensor';

    public $timestamps = false;

    protected $casts = [
        'quantity' => 'integer'
    ];

    public function sensor(): BelongsTo
    {
        return $this->BelongsTo(Sensor::class);
    }
}
