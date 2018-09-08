@extends('layouts.default')
@section('pagetitle')
Sign up
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
					<div class="panel-heading">Sign up</div>
				<div class="panel-bod">
		<table class="table table-striped">
			<tr>
				<td>NAME</td>
				<td><input type="text" name="user_name"></td>
			</tr>
			<tr>
				<td>EMAIL</td>
				<td><input type="text" name="email"></td>	
			</tr>
			<tr>
				<td>PHONE</td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
				<td>PASSWORD</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>GENDER</td>
				<td><input type="radio" name="gender" value="male">Male<br>
					<input type="radio" name="gender" value="female">Female</td>
			</tr>
			<tr>
				<td>Date OF Birth</td>
				<td><input type="date" name="dob"></td>
			</tr>
			<input type="hidden" name="user_type" value="user">
			<tr>
				<td></td>
				<td><input class="btn btn-primary" type="submit" value="Save"></td>
			</tr>
			@if($errors->any())
	<ul>
		@foreach($errors->all() as $err)
		<li>{{$err}}</li>
		@endforeach
	</ul>
	@endif
		</table>
	</div></div></div></div></div>
	</form>
@endsection