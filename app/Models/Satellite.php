<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\SatelliteSensor;
use App\Models\Sensor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Satellite extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'model',
        'customer_id',
        'image',
        'status',
        'norad',
        'cospair',
        'orbit_type',
        'inclination',
        'apogee',
        'perigee',
        'lauch_date',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'customer_id' => 'integer',
            'inclination' => 'decimal:2',
            'lauch_date' => 'datetime',
        ];
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function sensors(): BelongsToMany
    {
        return $this->belongsToMany(Sensor::class)
                    ->using(SatelliteSensor::class)
                    ->withPivot('quantity');
    }

    public function satelliteSensors(): HasMany
    {
        return $this->hasMany(SatelliteSensor::class);
    }
}
