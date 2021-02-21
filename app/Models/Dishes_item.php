<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dishes_item extends Model
{
    use HasFactory;
    public function catugory()
  {
      return $this->belongsTo('App\Models\Dish_category','catugory_id');
  }
}
