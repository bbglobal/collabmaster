<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    use HasFactory;

    protected $fillable = [
        '_token',
        'location',
        'bio',
        'description',
        'genderOption',
        'instagram_username',
        'instagram_followers',
        'tiktok_username',
        'youtube_username',
        'twitter_username',
        'twitch_username',
        'amazon_storefront',
        'website',
        'categories',
        'platform',
        'file_path',
        'img_1',
        'img_2',
        'img_3',
        'img_4',
        'user_id',
    ];
}
