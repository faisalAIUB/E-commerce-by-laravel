@extends('layouts.profile')
@section('pagetitle')
Edit profile
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
			<tr>
				<td>NAME</td>
				<td><input type="text" name="product_name"></td>
			</tr>
			<tr>
				<td>Brand</td>
				<td><input type="text" name="brand"></td>
			</tr>
			<tr>
				<td>Model</td>
				<td><input type="text" name="model"></td>
			</tr>
			<tr>
				<td>Useage Time</td>
				<td><input type="text" name="useage_time"></td>
			</tr>
			<tr>
				<td>PRICE</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td>Product Details</td>
				<td><input type="text" name="product_details"></td>
			</tr>
			
				<input type="hidden" name="img_path" value="abcd">
			<tr>
				<td>CATEGORY</td>
				<td>
					<select name="catid">
						@foreach($catlist as $cat)
							<option value="{{$cat->category_id}}">{{$cat->category_name}}</option>
						@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" class="btn btn-primary"></td>
			</tr>
		</table>
	</form>

	@if($errors->any())
	<ul>
		@foreach($errors->all() as $err)
		<li>{{$err}}</li>
		@endforeach
	</ul>
	@endif
</div></div></div></div></div></form>
@endsection