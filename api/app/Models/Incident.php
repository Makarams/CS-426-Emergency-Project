<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;
    protected $table = 'road_traffic_incident_reports';
    protected $primaryKey = 'id';
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
}