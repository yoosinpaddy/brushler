<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    
    public function comments(){
        return $this->hasMany(Review::class);
    }
    public function photos(){
        return $this->hasMany(SchoolPhoto::class);
    }
    public function courses(){
        return $this->hasMany(course::class);
    }
    public function features(){
        return $this->hasMany(SchoolFearture::class);
    }
}
