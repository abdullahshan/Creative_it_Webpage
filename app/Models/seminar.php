<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seminar extends Model
{
    use HasFactory;


    public function seminarlead(){

        return $this->hasMany(seminarlead::class);
    }
}
