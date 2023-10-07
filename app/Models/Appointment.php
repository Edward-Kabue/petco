<?php

namespace App\Models;

use App\Enums\AppointmentStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;
    protected $casts = [
        'status' => AppointmentStatus::class,
    ];
    public function pet(): BelongsTo
    {
        return $this->belongsTo(Pet::class);
    }
}
