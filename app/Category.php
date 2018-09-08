<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'category_id';
     public $timestamps = false;
      public function products()
    {
       return $this->hasMany('App\Product', 'category_id');
    }
}
