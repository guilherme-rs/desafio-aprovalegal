<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function sectors(){
        return $this->belongsToMany(Sector::class);
    }

    public function flows(){
        return $this->hasMany(Flow::class);
    }
}
