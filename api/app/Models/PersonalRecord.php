<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalRecord extends Model
{
    use HasFactory;

    protected $table = 'personal_record';
    protected $primaryKey = 'id';
    protected $fillable = [
        'account_id',
        'department_id', 
        'first_name', 
        'last_name', 
        'date_of_birth',
        'occupation', 
        'position', 
        'phone_number',
        'email',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'account_id', 'id');
    }

    public function department(){
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

}