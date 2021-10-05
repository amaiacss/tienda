@extends('layouts.app')

@section('titulo','Confirme la eliminacion del registro')


@section('contenido')
<div class="container py-5">
	<h1>¿Deseas eliminar el registro de {{ $products->name }} ? </h1>

<form method="post" action="{{ route('products.destroy', $products->id )}}">
	@method('DELETE') <!--enviar un campo oculto-->
	@csrf
	<button type="submit" class="redondo btn btn-danger">
		<i class="fas fa-trash-alt"></i> Eliminar
	</button>
	<a class="redondo btn btn-secondary" href="{{ route('products.index') }}">
		<i class="fas fa-ban"></i> Cancelar
	</a>
</form>	

</div>


{{-- @include('plantilla.footer',['container'=>'container']) --}}

@endsection