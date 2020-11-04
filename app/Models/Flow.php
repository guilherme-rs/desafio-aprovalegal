<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flow extends Model
{
    use HasFactory;

    public function sectors(){
        return $this->belongsTo(Sector::class);
    }

    public function documents(){
        return $this->belongsTo(Document::class);
    }
    
    public function employees(){
        return $this->belongsTo(Employee::class);
    }
}
