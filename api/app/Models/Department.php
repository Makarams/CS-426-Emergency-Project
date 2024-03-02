<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'general_department';
    protected $primaryKey = 'id';
    protected $fillable = [
        'department_name',
        'department_specialty',
        'department_type',
        'legend_symbol',
        'phone_number',
        'location_id',
    ];
    public function location(){
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }

    public function personal(){
        return $this->hasMany(PersonalRecord::class, 'department_id', 'id');
    }

}