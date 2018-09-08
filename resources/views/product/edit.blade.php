@extends('layouts.profile')
@section('pagetitle')
Edit product
@endsection
@section('content')
	<form method="post">
		{{csrf_field()}}
		<div class="container">
		<div class="row">
			<div class="col-md-4 ">
				<br/>
				<br/>	
		<div class="panel panel-info">
					<div class="panel-heading">Edit profile</div>
				<div class="panel-bod">
		<table class="table table-striped">
			<input type="hidden" name="product_id" value="{{$product->product_id}}">
			<tr>
				<td>NAME</td>
				<td><input type="text" name="product_name" value="{{$product->product_name}}"></td>
			</tr>
			<tr>
				<td>Brand</td>
				<td><input type="text" name="brand" value="{{$product->brand}}"></td>
			</tr>
			<tr>
				<td>Model</td>
				<td><input type="text" name="model" value="{{$product->model}}"></td>
			</tr>
			<tr>
				<td>Useage Time</td>
				<td><input type="text" name="useage_time" value="{{$product->useage_time}}"></td>
			</tr>
			<tr>
				<td>PRICE</td>
				<td><input type="text" name="price" value="{{$product->price}}"></td>
			</tr>
			<tr>
				<td>Product Details</td>
				<td><input type="text" name="product_details" value="{{$product->product_details}}"></td>
			</tr>
			
				<input type="hidden" name="img_path" value="abcd">
			
			</tr>
			<input type="hidden" name="date" value="{{$product->date}}">
			<input type="hidden" name="catid" value="{{$product->category_id}}">
			<input type="hidden" name="user_id" value="{{$product->user_id}}">
			<tr>
				<td></td>
				<td><input type="submit" value="Save" class="btn btn-primary"></td>
			</tr>
		</table>
		@if($errors->any())
	<ul>
		@foreach($errors->all() as $err)
		<li>{{$err}}</li>
		@endforeach
	</ul>
	@endif
</div></div></div></div></div>
	</form>
@endsection