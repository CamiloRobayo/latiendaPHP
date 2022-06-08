@extends('layouts.principal')

@section('contenido')
<div class="row">
    <h1>Carrito de compras</h1>
</div>
<div class="row">
    <div class="col s12">
        <table>
            <thead>
                <tr>
                    <th>Productos</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
            @foreach(session('cart') as $index => $prod )
            <tr>
                <td>{{ $prod[0]['nombre_prod'] }}</td>
                <td>{{ $prod[0]['Cantidad'] }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <form action="route('cart.destroy')" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">
            Borrar Carrito
        </button>
    </form>
</div>
@endsection 