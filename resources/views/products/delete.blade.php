<!-- Ventana Modal -->
<div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{ route('products.destroy', compact('product')) }}" method="POST"> 
      {{--  <form action="{{ route('products.destroy')->with('id', $product->id) }}" method="POST">  --}}
      @csrf <!--Para protegernos de inyección sql-->
      @method('DELETE') <!--Envíamos un DELETE como valor oculto-->

      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          ¿Deseas eliminar el producto? {{-- {{ $product->name }} --}}
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Borrar</button>
        </div>
      </div>
    </form>

  </div>
</div>