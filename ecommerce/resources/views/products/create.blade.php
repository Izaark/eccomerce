@extends('layouts.app')

@section('content')
	<div class="container white">
		<h1>Producto Nuevo</h1>
		{!! Form::open(['url' => '/products','method' =>'POST']) !!}
		<div class="form-group">
			{{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Título..'])}}
		</div>
		<div class="form-group">
			{{Form::number('pricing','',['class' => 'form-control', 'placeholder' => 'Precio del producto'])}}
		</div>
		<div class="form-group">
			{{Form::textarea('descriptions','',['class' => 'form-control', 'placeholder' => 'Descripcción del producto'])}}
		</div>
		
		<div class="form-group text-right">
			<a href="{{url('/products')}}">Regresar
			 a productos</a>
			 <input type="submit" value="Enviar" class="btn btn-success">
		</div>
		{!! Form::close()!!}
 	</div>
@endsection