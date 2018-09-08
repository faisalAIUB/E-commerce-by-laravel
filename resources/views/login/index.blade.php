@extends('layouts.default')
@section('pagetitle')
Login
@endsection
@section('content')
	
	<form method="post">
		{{csrf_field()}}
		<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				
				
				<br/>
				<br/>	
		<div class="panel panel-info">
					<div class="panel-heading">Login</div>
				<div class="panel-bod">
	
				<table class="table table-striped">
				<tr>
				<td>USERNAME</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
				<td>PASSWORD</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="btn btn-primary" type="submit" value="Login"></td>
			</tr>
		</table>
		</div>
		</div>
	</div>
</div>
</div>

	</form>
	@if($errors->any())
	<ul>
		@foreach($errors->all() as $err)
		<li>{{$err}}</li>
		@endforeach
	</ul>
	@endif

	@if(session('message'))
		{{session('message')}}
	@endif

@endsection