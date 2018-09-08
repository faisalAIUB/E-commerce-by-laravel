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
			<input type="hidden" name="user_id" value="{{$user->user_id}}">
			<tr>
				<td>NAME</td>
				<td><input type="text" name="user_name"
					value="{{$user->user_name}}"></td>
			</tr>
			
				<input type="hidden" name="email" value="{{$user->email}}">	
			
			<tr>
				<td>PHONE</td>
				<td><input type="text" name="phone" value="{{$user->phone}}"></td>
			</tr>
			<tr>
				<td>PASSWORD</td>
				<td><input type="password" name="password" "></td>
			</tr>
			<input type="hidden" name="gender" value="{{$user->gender}}">
					
			
			<input type="hidden" name="dob" value="{{$user->dob}}">
			<input type="hidden" name="user_type" value="{{$user->user_type}}">
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
</div></div></div></div></div></form>
@endsection