<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		{{csrf_field()}}
		<table>
			<input type="hidden" name="category_id" value="{{$category->category_id}}">
			<tr>
			<th>
				Category Name
			</th>
			<td><input type="text" name="category_name" value="{{$category->category_name}}"> </td>
			</tr>
			<tr><td><input type="submit" name="save"></td></tr>
		</table>
		</form>
		@if($errors->any())
	<ul>
		@foreach($errors->all() as $err)
		<li>{{$err}}</li>
		@endforeach
	</ul>
	@endif
</body>
</html>