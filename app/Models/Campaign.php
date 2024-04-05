<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        '_token',
        'platform',
        'website',
        'instagram_username',
        'tiktok_username',
        'youtube_username',
        'twitter_username',
        'product_summary',
        'content_type_0',
        'quantity_0',
        'duration_0',
        'duration_unit_0',
        'requirement_description_0',
        'quantity_1',
        'duration_1',
        'duration_unit_1',
        'requirement_description_1',
        'genderOption',
        'genderOption_2',
        'genderOption_3',
        'genderOption_4',
        'product_cost',
        'genderOption_5',
        'delivery_date',
        'genderOption_6',
        'mentions',
        'img_files',
        'img1',
        'img2',
        'img3',
        'img4',
        'content_1',
        'content_2',
        'content_3',
        'content_4',
        'files',
        'file_list_objs',
        'user_id',
        // Add other fields as needed
    ];
}
