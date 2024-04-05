<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [

        'package_content_type_',
        'package_quantity_',
        'package_duration_',
        'package_duration_unit_',
        'package_price_',
        'package_description_',
        'user_id',
    ];
}
