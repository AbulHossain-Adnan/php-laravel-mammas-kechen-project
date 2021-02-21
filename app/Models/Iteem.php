<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iteem extends Model
{
    use HasFactory;
    public function Catugory()
  {
      return $this->belongsTo('App\Models\Catugori','catugory_id');
  }
}
