@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  </h2>
            </div>
            <div class="ajustar-boton_retroceder">
                <a class="btn btn-primary" href="{{ route('products.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre producto:</strong>
                <h5 class="tam-letra-show">{{ $product->name }}</h5>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripción:</strong>
                 <h5 class="tam-letra-show"> {{ $product->description }} </h5>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Precio:</strong>
                 <h5 class="tam-letra-show"> {{ $product->price }} </h5>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha de creación:</strong>
                 <h5 class="tam-letra-show"> {{ $product->created_at }} </h5>
            </div>
        </div>
    </div>
@endsection