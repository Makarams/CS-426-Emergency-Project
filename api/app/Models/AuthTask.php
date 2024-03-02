<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthTask extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'name',
        'description',
        'priority'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
