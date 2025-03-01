<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_type',
        'event_type_other',
        'venue',
        'venue_address',
        'guest_count',
        'budget',
        'special_requests',
        'event_date',
        'start_time',
        'end_time',
        'services',
        'services_other',
    ];

    protected $casts = [
        'event_type' => 'array',
        'services' => 'array',
    ];
}
