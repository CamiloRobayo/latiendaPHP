@extends('layouts.principal')

@section('contenido')
<div class="row">
     <h1 class="light-blue-text text-darken-3"> <center>Carrito de compras</center></h1>
</div>
@if(!session('cart'))
<div class="row">
     <p>no hay items en el carrito</p>
</div>
@else()
<div class="row">
    <div class="col s12">
        <table class="striped">
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
                <td>{{ $prod[0]['cantidad'] }}</td>
                <td>{{ $prod[0]['total'] }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <form action="{{route('cart.destroy' ,1 )}}" method="POST">
        @method('DELETE')
        @csrf
        <button class="waves-effect waves-light btn" class="material-icons left" type="submit">
            Borrar Carrito
        </button>
    </form>
</div>
@endif
@endsection 