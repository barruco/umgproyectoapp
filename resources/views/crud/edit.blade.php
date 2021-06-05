@extends('adminlte::page')

@section('title', 'EDITAR GASTOS')

@section('content_header')
    <h1>Editar Gasto</h1>
@stop

@section('content')
   <form action="/crud/{{$gastos->id}}" method="POST">    
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="gasto" name="gasto" type="text" class="form-control" value="{{$gasto->gasto}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$gasto->descripcion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="monto" name="monto" type="number" step="any" class="form-control" value="{{$gasto->monto}}">
  </div>
  <a href="/articulos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop