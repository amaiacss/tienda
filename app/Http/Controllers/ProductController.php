<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //CONSULTA: que devuelve todos los registros del modelo Product, ordenados por el último creado(latest()) o (oldtest()) y además hace una paginación mostrando sólo 5 resgistros por página
        $products = Product::latest()->paginate(5);

        //Devuelve la vista products.index con los datos del array de objetos products
        //Para la paginación:También se envía una variable i, que significa que si el la variable i está definidad en la solicitud obtendrá ese valor, sino cogerá el valor 1 por defecto
        return view('products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'price' => 'required'
        // ]);

        //CONSULTA: Obtiene todos los campos(name) que nos llegan desde el formulario, muy importante para que esto funciones los name del formulario deben de coincidir con los nombres de los campos de la tabla products
        //Lo de abajo equivale a INSERT INTO products (name, description, price) VALUE('name', 'description', 'price');
        Product::create($request->all());

        //Creamos el mensaje que se mostrará en la alerta de la vista index
        \Session::flash('message', 'Producto añadido correctamente');
        //Nos redirige a la ruta index
        return redirect()->route('products.index');
            // ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Product $product)
    {
        //VAlida los datos recibidos
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        //CONSULTA: Recibe los name(deben tener el mismo nombre que los campos del modelo o tabla products) del formulario-vista edit, y los envía al método update
        $product->update($request->all());

        //Creamos el mensaje que se mostrará en la alerta de la vista index
        \Session::flash('message', 'Producto actualizado correctamente');

        return redirect()->route('products.index');
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    // public function destroy($id)
    {
        // $product=Product::findOrFail($id);

        //CONSULTA: Elimina el registro del modelo product
        $product->delete();

        //Creamos el mensaje que se mostrará en la alerta de la vista index
        \Session::flash('message', 'Producto borrado correctamente');
        return redirect()->route('products.index');
    }

}
