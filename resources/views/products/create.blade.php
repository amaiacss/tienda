@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Añadir nuevo producto</h2>
            </div>
            <!--Botón retroceder-->
            <div class="ajustar-boton_retroceder">
                <a class="btn btn-primary" href="{{ route('products.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <!--Es si se produce algún error, muestra el mensaje-->
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif

    <!--FORMULARIO PARA AGREGAR UN PRODUCTO-->
    <form action="{{ route('products.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre producto:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Nombre producto">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <textarea class="form-control" style="height:50px" name="description"
                        placeholder="descripción"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Precio:</strong>
                    <input type="number" name="price" class="form-control" placeholder="Ponga el precio">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
@endsection