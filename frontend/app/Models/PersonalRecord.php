<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalRecord extends Model
{
    use HasFactory;

    protected $table = 'personal_record';
    protected $primaryKey = 'id';
    protected $fillable = ['first_name', 'last_name', 'occupation', 'position', 'phone_number', 'date_of_birth', 'active', 'department_id', 'account_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'account_id');
    }

    public function department()
    {
        return $this->belongsTo(GeneralDepartment::class, 'department_id');
    }
}