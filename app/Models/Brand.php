<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        '_token',
        'industry',
        'cover_photo',
        'location',
        'description',
        'website',
        'instagram',
        'tiktok',
        'youtube',
        'twitter',
        'categories',
        'familiarity',
        'platforms',
        'need',
        'content',
        'genderOption',
        'user_id',
    ];
}
