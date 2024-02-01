<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class PersonalTrainer extends Model
{
    use HasFactory;
    // protected $table = 'personal_trainers';

    protected $fillable = [
        'full_name',
        'phone_number',
        'gender',
        'address',
        'role',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}