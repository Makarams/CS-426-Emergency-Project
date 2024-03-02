<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LostAndFound extends Model
{
    use HasFactory;
    protected $table = 'lost_and_found_property_reports';
    protected $primaryKey = 'id';
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
        'isSolve'
    ];
}