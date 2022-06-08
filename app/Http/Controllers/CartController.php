<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1. persistir los datos en una session
        $producto = [   [
                            "prod_id" => $request->prod_id,
                            "cantidad" => $request->cantidad,
                            "nombre_prod" => Producto::find($request->prod_id)->nombre
                        ]       
                    ];
        //2.meter los datos en una session
        if( !session('cart')){
            $aux[] = $producto;
            session(['cart' => $aux]);
        } else{
            //extraer los datos del carrito de la variable session
            $aux = session('cart');
            //eliminar la variable de sesion:
            session()->forget('cart');
            //agregar el nuevo producto a los ya existentes
            $aux[] = $producto;
            //volver a crear la variable de sesion con el nuevo producto
            session(['cart' => $aux]);
        }

        //redireccion al catalogo de productos 
        //con mensaje de añadir al crrito 
        return redirect('productos')->with("mensajito", "su producto a sido añadido");
        
        //var_dump($producto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
