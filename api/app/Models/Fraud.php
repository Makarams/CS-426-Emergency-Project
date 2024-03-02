<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fraud extends Model
{
    use HasFactory;
    protected $table = 'fraud_reports';
    protected $primaryKey = 'id';
    protected $fillable = [
        "name",
        "email",
        "phone",
        "consent",
        "location",
        "evidence,", 
        "fraud_type",
        "description",
        "report_anonymously",
        "emergency_services_contacted",
        'isSolve'
    ];
}