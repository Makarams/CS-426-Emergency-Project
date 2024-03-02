<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoadTrafficIncidentReport extends Model
{
    protected $fillable = [
        'reporter_name',
        'reporter_contact',
        'incident_location',
        'incident_description',
        'emergency_assistance',
        'photo',
        'contact_reporter',
        'consent',
    ];

    protected $casts = [
        'consent' => 'boolean',
    ];
}
