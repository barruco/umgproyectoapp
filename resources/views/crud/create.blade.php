@extends('adminlte::page')

@section('title', 'Creacion de Gastos')

@section('content_header')
   <h1>Crear Gasto</h1>
@stop

@section('content')
    
<form action="/crud" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Gasto</label>
    <input id="gasto" name="gasto" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Monto</label>
    <input id="monto" name="monto" type="monto" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <a href="/crud" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop