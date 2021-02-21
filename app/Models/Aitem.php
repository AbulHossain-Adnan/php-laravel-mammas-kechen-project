<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aitem extends Model
{
  protected $fillable=[
    'name','price','description','image','category_id'
  ];
    use HasFactory;

    public function Category()
  {
      return $this->belongsTo('App\Models\Categori','category_id');
  }
}
