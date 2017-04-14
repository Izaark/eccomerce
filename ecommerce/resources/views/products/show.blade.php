@extends('layouts.app')
@section('content')
<div class="container text-center">
	<div class="card text-left product">

	@if(Auth::check() && $product->user_id == Auth::user()->id)

	<div class="absolute actionse">
		<a href="{{url('/products/'.$product->id.'/edit')}}">
			Editar
		</a>	
		@include('products.delete',['product' => $product])
	</div>
	@endif

	<h3>{{$product->title}}</h3>
	<div class="row">
		<div class="col-sm-6 col-xs-12"></div> 
		<div class="col-sm-6 col-xs-12">
			<p><strong>Descripción</strong></p>
			<p>
				{{$product->descriptions}}
			</p>
			<p>
				<a href="" class="btn btn-success">
					Agregar al carrito
				</a>
			</p>
		</div>
	</div>
</div>
</div>
@endsection