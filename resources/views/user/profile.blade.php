@extends('layouts.profile')
@section('pagetitle')
Profile
@endsection
@section('content')

    <div class="container">
		<div class="row">
			<div class="col-md-12  ">
				<br/>
				<br/>	
		<div class="panel panel-info">
					<div class="panel-heading">My Products</div>
				<div class="panel-bod">
    
    <table class="table table-striped">
							<tr>
								<th>PRODUCT NAME</th>
								<th>BRAND</th>
								<th>MODEL</th>
								<th>USEAGE TIME</th>
								<th>PRICE</th>
								<th>PRODUCT DETAILS</th>
								<th>DATE</th>
								<th>CATEGORY NAME</th>
							</tr>
							@foreach($products as $product)
							<tr>
								<td>{{$product->product_name}}</td>
								<td>{{$product->brand}}</td>
								<td>{{$product->model}}</td>
								<td>{{$product->useage_time}}</td>
								<td>{{$product->price}}</td>
								<td>{{$product->product_details}}</td>
								<td>{{$product->date}}</td>
								<td>{{$product->category->category_name}}</td>
								<td><a href="{{route('product.edit', ['id'=> $product->product_id])}}" class="btn btn-primary">Edit</a>  <a href="{{route('product.delete', ['id'=> $product->product_id])}}" class="btn btn-danger">Delete</a></td>
							</tr>
							@endforeach
						</table>
					</div></div></div></div></div>
@endsection