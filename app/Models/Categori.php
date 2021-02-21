<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
  protected $fillable=[
    'name'
  ];
    use HasFactory;

    public function Aitems(){
       return $this->hasMany('App\Models\Aitem','category_id');
    }
}
