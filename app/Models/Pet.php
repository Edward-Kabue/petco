<?php

namespace App\Models;

use App\Enums\PetType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pet extends Model
{
    use HasFactory;
    protected $casts = [
        'type' => PetType::class
    ];
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
    public function clinics(): BelongsToMany
    {
        return $this->belongsToMany(Clinic::class);
    }

}
