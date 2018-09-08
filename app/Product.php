<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';
     public $timestamps = false;
     public function category()
    {
       return $this->belongsTo('App\Category', 'category_id');
    }
    public function user()
    {
       return $this->belongsTo('App\User', 'user_id');
    }
}
