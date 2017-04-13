{!! Form::open(['url' => $url, 'method' => $method ]) !!}
	<div class="form-group">
		{{Form::text('title',$product->title,['class' => 'form-control', 'placeholder' => 'Título..'])}}
	</div>
	<div class="form-group">
		{{Form::number('pricing',$product->pricing,['class' => 'form-control', 'placeholder' => 'Precio del producto'])}}
	</div>
	<div class="form-group">
		{{Form::textarea('descriptions',$product->descriptions,['class' => 'form-control', 'placeholder' => 'Descripcción del producto'])}}
	</div>
	
	<div class="form-group text-right">
		<a href="{{url('/products')}}">Regresar
		 a productos</a>
		 <input type="submit" value="Enviar" class="btn btn-success">
	</div>
{!! Form::close()!!}