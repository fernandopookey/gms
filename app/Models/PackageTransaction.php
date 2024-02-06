<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTransaction extends Model
{
    use HasFactory;
    protected $table = 'member_registrations';

    protected $fillable = [
        'package_name',
        'days',
        'package_price',
        'admin_price',
        'description',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // public function trainerSession()
    // {
    //     return $this->hasMany(TrainerSession::class);
    // }

    // public function memberRegistration()
    // {
    //     return $this->hasMany(MemberRegistration::class);
    // }
}
