@extends('layouts.principal')

@section('contenido')
<div class="row">
  <h1 class="cyan-text text-accent-3"> Nuevo Producto </h1>
</div>

<div class="row">
    <form method="POST" action="{{ route('productos.store') }}" class="col s8">
    @csrf
        <div class="row">
          <div class="input-field col s8">
            <input 
              placeholder="Nombre completo" 
              id="Nombre"
              name="Nombre"
              type="text" 
              class="validate">
            <label for="first_name">Nombre de Producto</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s8">
            <textarea id="desc" class="materialize-textarea" 
                      name="desc"
            ></textarea>
            <label for="desc">Descripcion</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s8">
            <input id="precio" type="text" name="precio" class="validate">
            <label for="precio">Precio</label>
          </div>
        </div>
        <div class="row">
          <div class="file-field input-field col s8">
            <div class="btn waves-effect waves-light cyan accent-3" class="btn">
              <span>Imagen del Producto</span>
              <input type="file" name="imagen">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input-field-cold s8">
            <select name="categoria">
              <option value="" disabled selected>Seleccione una categoria</option>
              @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
              @endforeach()
            </select>
            <label>Categorias</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field-cold s8">
            <select name="Marca">
              <option value="" disabled selected>Seleccione una Marca</option>
              @foreach($marcas as $marca)
                <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
              @endforeach()
            </select>
            <label>Marca</label>
          </div>
        </div>
        <div class="row">
          <div class="col s8">
            <button  class="btn waves-effect waves-light" 
                type="submit"
                name="action">Guardar
            </button>
          </div>
        </div>
    </form>
  </div>
  @endsection