@extends('layouts.principal')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="light-blue-text text-darken-3"> <center>Catalogo de Producto</center></h1>
            </div>
        </div>
         
        @if(session('mensajito'))
        <div class="row">
            <p>{{ session('mensajito') }}
                <a href="{{ route('cart.index') }}">
                    Ir al carrito
                </a>
            </p>
        </div>

        @endif

        <div class="row">
            
            @foreach($productos as $producto)

            <div class="col s5 m5">
                    <div class="card">
                        <div class="card-image">
                           <img src="{{ asset('img/'.$producto->imagen)}}" width="500px" height="400px">
                        </div>
                        <div class="card-content">
                          <span class="card-title grey-text text-darken-4">{{ $producto->nombre }}<i class="material-icons right"></i></span>
                          <ul>
                          <li>Descripcion: {{ $producto->descripcion}}</li>
                          <li>precio: {{ $producto->precio}}</li>
                          </ul>
                        </div>
                        <div class="card-action">
                          <p><a href="{{ route('productos.show', $producto->id) }}"> Ver Detalles</a></p>
                        </div>
                    </div>
            </div>

            @endforeach

        </div>

    </div>

@endsection