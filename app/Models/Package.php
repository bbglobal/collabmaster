<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    
    protected $fillable = [
        // Define fillable fields here
        'package_content_type',
        'package_quantity',
        'package_duration',
        'package_duration_unit',
        'package_price',
        'package_description',
        'user_id', // Assuming there's a relationship with users
    ];
}
