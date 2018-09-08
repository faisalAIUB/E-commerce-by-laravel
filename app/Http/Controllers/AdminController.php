<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
	public function index(){
	$categories=Category::all();
    return view('admin.home')
    	->with('categories',$categories);
    }
}
