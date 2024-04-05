<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubAdmin extends Model
{
    use HasFactory;

    public function subadmin(){
        return $this->hasOne(Assign:: class, 'subadmin_id','id');
    }
}
