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
        'categories',
        'familiarity',
        'platforms',
        'need',
        'content',
        'genderOption',
        'user_id',
    ];

    public function user_brand(){
        return $this->belongsTo(User:: class, 'user_id','id');
    }
}
