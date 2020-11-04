<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    public function companies(){
        return $this->belongsToMany(Company::class);
    }

    public function employees(){
        return $this->belongsToMany(Employee::class);
    }

    public function flows(){
        return $this->hasMany(Flow::class);
    }
}
