@extends('layouts.profile')
@section('pagetitle')
Edit profile
@endsection
@section('content')


	<form method="post">
		{{csrf_field()}}
		<div class="container">
				<h4>This cannot be undone. Are you sure?</h4>
		<div class="row">
			<div class="col-md-4 ">	
		<div class="panel panel-info">
					<div class="panel-heading">Delete post?</div>
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
			<tr><td></td><td><input type="submit" value="Confirm"class="btn btn-danger" ></td></tr>
		</table>
		
		<input type="hidden" name="product_id" value="{{$product->product_id}}">
	</div></div></div></div></div>
	</form>

@endsection