<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    public function employe(){
        return $this->belongsTo(Employe::class);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function products(){
        return $this->belongsToMany(Product::class)->withTimestamps()->withPivot('quantity', 'price', 'subtotal');
    }
}
