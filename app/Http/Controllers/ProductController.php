<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catlist = DB::table('categories')
            ->get();

        return view('product.create')
            ->with('catlist', $catlist);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $data=[
            'product_name'=>$request->product_name,
            'brand'=>$request->brand,
            'model'=>$request->model,
            'useage_time'=>$request->useage_time,
            'price'=>$request->price,
            'product_details'=>$request->product_details,
            'img_path'=>$request->img_path,
            'date'=>date('d-m-Y'),
            'user_id'=>$request->session()->get('user')->user_id,
            'category_id'=>$request->catid

        ];
        DB::table('products')->insert($data);
        return redirect()->route('user.profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prdt= Product::find($id);
        return view('product.show')
        ->with('product',$prdt);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prdt=Product::find($id);
        return view('product.edit')
            ->with('product',$prdt);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(CreateProductRequest $request, $id)
    {
        $prdt=Product::find($request->product_id);
        $prdt->product_name=$request->product_name;
        $prdt->brand=$request->brand;
        $prdt->model=$request->model;
        $prdt->useage_time=$request->useage_time;
        $prdt->price=$request->price;
        $prdt->product_details=$request->product_details;
        $prdt->save();
        return redirect()->route('user.profile');
    }

     public function delete($id)
    {
        $prdt=Product::find($id);
        return view('product.delete')
                    ->with('product',$prdt);
    }
    public function destroy(Request $request,$id)
    {
        Product::destroy($request->product_id);
        return redirect()->route('user.profile');
    }
}
