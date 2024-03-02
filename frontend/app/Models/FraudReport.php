<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FraudReport extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'location',
        'fraud_type',
        'description',
        'evidence',
        'emergency_services_contacted',
        'consent',
        'report_anonymously',
    ];

    protected $casts = [
        'consent' => 'boolean',
        'report_anonymously' => 'boolean',
    ];
}
