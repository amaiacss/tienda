@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2 style="text-align: center;">Ejemplo Laravel 8 CRUD</h2>
            </div>

            <div class="ajustar-boton-crear">
                <a class="btn btn-success" href="{{ route('products.create') }}" title="Crear un producto"> <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>

    <!--Si la sesión tiene mensaje mostramos una alerta con un script JQuery y luego hacemos que desaparezca-->
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismisible" id="alerta">
            <h4 class="mensaje">{!! Session::get('message') !!}</h4>  
        </div>
        <script>
            $(document).ready(function(){
                $('#alerta').fadeTo(2000,500).slideUp(500,function(){
                        $('#alerta').slideUp(500);
                });
            });
        </script>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Producto</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Fecha de creación</th>
            <th>Acciones</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->created_at }}</td>
                <td>
                    <!--Botón de acción Mostrar o Show-->
                    <a href="{{ route('products.show', compact('product')) }}" title="show">
                    <i class="fas fa-eye text-success fa-lg"></i>
                    </a>

                    <!--Botón de acción editar-actualizar o update-->
                    <a href="{{route('products.edit', compact('product')) }} ">
                    <i class="fas fa-edit fa-lg"></i>
                    </a>

                    <!--Botón de acción para mostrar la ventan modal de confirmación de borrado-->
                    <a href="" type="button" style="border: none; background-color:transparent;" data-toggle="modal" data-target="#ventanaModal"><i class="fas fa-trash fa-lg text-danger"></i> </a>    
                </td>
            </tr>

            <!--vista con la ventana modal para confirmar el borrado-->
            @include('products.delete')

        @endforeach
    </table>

     <!--Para que funcione la paginación con bootstrap debemos usar la clase Paginator en el archivo app/Providers/AppService/Provider.php  -->
    <div class="ajustar-paginacion">
        {!! $products->links() !!} 
    </div>
@endsection

<!--CDN DE JQUERY-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--JS DE BOOTSTRAP-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha512-Ah5hWYPzDsVHf9i2EejFBFrG2ZAPmpu4ZJtW4MfSgpZacn+M9QHDt+Hd/wL1tEkk1UgbzqepJr6KnhZjFKB+0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 


