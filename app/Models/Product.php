<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function sales(){
        return $this->belongsToMany(Sale::class)->withTimestamps()->withPivot('quanty', 'price', 'subtotal');
    }
    public function buys(){
        return $this->belongsToMany(Buy::class)->withTimestamps()->withPivot('quanty', 'price', 'subtotal');
    }
}
