@extends('layouts.default')
@section('pagetitle')
Product Details
@endsection
@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-6 ">
				<br/>
				<br/>	
		<div class="panel panel-info">
					<div class="panel-heading">Product Details</div>
				<div class="panel-bod">
	<table class="table table-striped">
		
		<tr>
				<td>NAME:</td>
				<td>{{$product->product_name}}</td>
			</tr>
			
				<tr>
					<td>
						brand:
					</td>
					<td>
						{{$product->brand}}
					</td>
				</tr>
				<tr>
				<td>Model:</td>
				<td>{{$product->model}}</td>
			</tr>
			<tr>
				<td>Use time:</td>
				<td>{{$product->useage_time}}</td>
			</tr>
			<tr>
				<td>Price:</td>
				<td>{{$product->price}}</td>
			</tr>	
			<tr>
				<td>Product Details:</td>
				<td>{{$product->product_details}}</td>
			</tr>
			<tr>
				<td>Date:</td>
				<td>{{$product->date}}</td>
			</tr>			
			<tr>
				<td>Category Name:</td>
				<td>{{$product->category->category_name}}</td>
			</tr>
			<tr>
				<td>Owner's Name:</td>
				<td>{{$product->user->user_name}}</td>
			</tr>
			<tr>
				<td>Contact Owner:</td>
				<td>{{$product->user->phone}}</td>
			</tr>			
	</table>

@endsection
