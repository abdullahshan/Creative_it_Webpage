<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    function user(){

        return $this->belongsTo(user::class);
    }

    function post_categories(){

        return $this->belongsToMany(category::class)->withTimestamps();
    }
}
