<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;

   public function employe(){
       return $this->belongsTo(Employe::class);
   }
   public function suplier(){
    return $this->belongsTo(Suplier::class);
}
public function products(){
    return $this->belongsToMany(Product::class)->withTimestamps()->withPivot('quantity', 'price', 'subtotal');
}
}
