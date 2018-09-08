@extends('layouts.profile')
@section('pagetitle')
User info
@endsection
@section('content')
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
				<td>NAME:</td>
				<td>{{$user->user_name}}</td>
			</tr>
			
				<tr>
					<td>
						Email:
					</td>
					<td>
						{{$user->email}}
					</td>
				</tr>
				<tr>
				<td>Phone:</td>
				<td>{{$user->phone}}</td>
			</tr>
			<tr>
				<td>gender:</td>
				<td>{{$user->gender}}</td>
			</tr>
			<tr>
				<td>DOB:</td>
				<td>{{$user->dob}}</td>
			</tr>	
			
			
	</table>
</div></div></div></div></div>

@endsection
