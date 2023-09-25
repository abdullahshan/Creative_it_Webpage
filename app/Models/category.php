<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    function cat_posts(){

        return $this->hasMany(post::class)->withTimestamps();
    }
}
