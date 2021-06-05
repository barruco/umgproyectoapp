@extends('adminlte::page')

@section('title', 'LISTADO DE GASTOS')

@section('content_header')
    <h1>Gastos</h1>
@stop

@section('content')
   <a href="crud/create" class="btn btn-primary mb-3">CREAR</a>

<table id="gastos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Gasto</th>
            <th scope="col">Descripción</th>
            <th scope="col">Monto</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($gastos as $gasto)
        <tr>
            <td>{{ $gasto->id}}</td>
            <td>{{$gasto->gasto}}</td>
            <td>{{$gasto->descripcion}}</td>
            <td>{{$gasto->monto}}</td>
            <td>
                <form action="{{ route ('gastos.destroy',$gasto->id)}}" method="POST">
                <a href="/crud/{{ $gasto->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#gastos').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop