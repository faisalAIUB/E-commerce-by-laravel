<!DOCTYPE html>
<html>
<head>
	<title>@yield('pagetitle')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/bootstrap.theme.min.css')}}">
	<style type="text/css">
	.active{
		border: 1px solid;
		border-color: #337ab7;
	}
	</style>
	@yield('styles')

	<script type="text/javascript" src="{{asset('assets/jquery/jquery-3.3.1.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/bootstrap/bootstrap.min.js')}}"></script>
	@yield('scripts')
</head>
<body>

	 <nav class="navbar">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="{{Route::is('home') ? 'active' : ''}}"><a href="{{route('home')}}">Home</a></li>
      <li class="{{Route::is('user.profile') ? 'active' : ''}}"><a href="{{route('user.profile')}}">Profile</a></li>
      <li class="{{Route::is('user.create') ? 'active' : ''}}"><a href="{{route('user.create')}}">Sign up</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{route('login')}}">Login</a></li>
    </ul>
  </div>
</nav> 
	
	@yield('content')

</body>
</html>