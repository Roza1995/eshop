<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;

class Product extends Model
{
  public function images(){
    return $this->belongsToMany(Image::class,'related','product_id','image_id');
  }

  public function carts(){
    return $this->hasMany(Cart::class, 'product_id','id');
  }

}
