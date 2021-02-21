<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish_category extends Model
{
    use HasFactory;
    public function dishes(){
       return $this->hasMany('App\Models\Dishes_item','dishes_id');
    }
}
