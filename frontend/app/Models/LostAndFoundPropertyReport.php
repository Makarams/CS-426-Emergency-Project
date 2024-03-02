<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LostAndFoundPropertyReport extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'property_type',
        'description',
        'location',
        'date',
        'contact_owner',
        'consent',
    ];

    protected $casts = [
        'date' => 'date',
        'consent' => 'boolean',
    ];
}
