<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketMember extends Model
{
    use HasFactory;
    protected $table = 'member_packages';

    protected $fillable = [
        'package_name',
        'days',
        'package_price',
        'admin_price',
        'description',
    ];
}
