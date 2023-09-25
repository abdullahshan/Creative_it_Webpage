<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seminarlead extends Model
{
    use HasFactory;


    public function seminar(){

        return $this->belongsTo(seminar::class);
    }
}
