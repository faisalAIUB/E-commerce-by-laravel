<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
    		$products= Product::all();
            return  view('home.index')
              		->with('products',$products);
        }
}
