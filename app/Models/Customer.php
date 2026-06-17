<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'agency_name',
        'agency_type',
        'email',
        'cellphone',
        'bio',
        'monthly_billing',
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
            'monthly_billing' => 'decimal:2',
        ];
    }

    public function satellites(): HasMany
    {
        return $this->hasMany(Satellite::class);
    }
}
