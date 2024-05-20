<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'price',
        'release_date',
        'first_registration_date',
        'kilometer_used',
        'fuel_efficiency',
        'fuel_type',
        'warranty_showroom',
        'type',
        'image'
    ];

    /**
     * image
     *
     * @return Attribute
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => url('/storage/images/cars/' . $image),
        );
    }

    protected $appends = ['warranty_remaining_days', 'usage_age'];

    /**
     * Accessor for warranty_remaining_days attribute.
     *
     * @return int
     */
    public function getWarrantyRemainingDaysAttribute(): int
    {
        $warrantyDate = Carbon::createFromFormat('Y-m-d', $this->attributes['warranty_showroom']);
        $now = Carbon::now();
        $remainingDays = $now->diffInDays($warrantyDate, false);

        // Ensure remaining days is not negative
        return max(0, $remainingDays);
    }

    /**
     * Accessor for usage_age attribute.
     *
     * @return int|null
     */
    public function getUsageAgeAttribute(): ?int
    {
        if (!isset($this->attributes['first_registration_date'])) {
            return null;
        }
        $registrationDate = Carbon::createFromFormat('Y-m-d', $this->attributes['first_registration_date']);
        return $registrationDate->diffInYears(Carbon::now());
    }

    /**
     * Accessor for name attribute to capitalize the first letter.
     *
     * @return string
     */
    public function getNameAttribute($value): string
    {
        return ucfirst($value);
    }

    /**
     * Accessor for type attribute to capitalize the first letter.
     *
     * @return string
     */
    public function getTypeAttribute($value): string
    {
        return ucfirst($value);
    }

    /**
     * Accessor for fuel_type attribute to capitalize the first letter.
     *
     * @return string
     */
    public function getFuelTypeAttribute($value): string
    {
        return ucfirst($value);
    }
}
