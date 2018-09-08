@extends('layouts.default')
@section('pagetitle')
Home
@endsection
@section('content')
           
            

            @foreach($products as $product)
   <div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<br/>
				<br/>	
		<div class="panel panel-info">
					<div class="panel-heading">{{$product->product_name}}</div>
				<div class="panel-bod">
    <table class="table table-striped" >
							<tr>
								<td>PRODUCT NAME</td>
								<td>{{$product->product_name}}</td>
								</tr><tr>
								<td>BRAND</td>
								<td>{{$product->brand}}</td>
								</tr><tr>
								<td>MODEL</td>
								<td>{{$product->model}}</td>
								</tr><tr>
								<td>PRICE</td>
								<td>{{$product->price}}</td>
								</tr>
								<tr><td></td>
									<td><a href="{{route('product.details',['id'=>$product->product_id])}}">More details</a></td></tr>
							
						</table>
						
					</div></div></div></div></div>
						@endforeach
  @endsection  