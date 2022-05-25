@extends('layouts.principal')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="light-blue-text text-darken-3"> <center>Catalogo de Producto</center></h1>
            </div>
        </div>

        <div class="row">
        
            @foreach($productos as $producto)

            <div class="col s5 m5">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                           <img class="activator" src="{{ asset('img/'.$producto->imagen)}}" width="500px" height="400px">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator grey-text text-darken-4">{{ $producto->nombre }}<i class="material-icons right"></i></span>
                          <ul>
                          <li>Descripcion: {{ $producto->descripcion}}</li>
                          <li>Descripcion: {{ $producto->precio}}</li>
                          </ul>
                        </div>
                        <div class="card-action">
                          <p><a href="#"> Ver Detalles</a></p>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

    </div>

@endsection