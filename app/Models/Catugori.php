<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catugori extends Model
{
    use HasFactory;
    public function iteems(){
       return $this->hasMany('App\Models\iteem','catugory_id');
    }
}
