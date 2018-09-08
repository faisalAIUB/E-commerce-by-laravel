<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
		<a href="{{route('logout')}}">Log out</a>
		<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>Category List</h2>
				<a class="btn btn-primary" href="{{route('category.create')}}">Create New</a>
				<br/>
				<br/>
				<div class="panel panel-info">
					<div class="panel-heading">List of Categories</div>
					<div class="panel-body">
						<table class="table table-striped">
							<tr>
								
								<th>NAME</th>
								
							</tr>
							@foreach($categories as $cat)
							<tr>
								<td>{{$cat->category_name}}</td>
								<td><a href="{{route('category.edit', ['id'=> $cat->category_id])}}">Edit</a> | <a href="{{route('category.delete', ['id'=> $cat->category_id])}}">Delete</a></td>
							</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>