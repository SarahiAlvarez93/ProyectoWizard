<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    public function sales(){
        return $this->hasMany(Sale::class);
    }
    public function buys(){
        return $this->hasMany(Buy::class);
    }
}
