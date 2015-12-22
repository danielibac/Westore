@extends('master')

@section('contenido')
    <br>
    <div class="panel panel-default">
        <div><a href="/productos/create" class="btn btn-success ">Agregar nuevo producto</a>
        <a href="/categorias" class="btn btn-success ">Agregar nueva categoria</a></div>
        <div class="panel-heading">Lista de productos</div>
        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{$producto->id_producto}}</td>
                        <td>{{$producto->marca}}</td>
                        <td>{{$producto->modelo}}</td>
                        <td><a href="/productos/{{$producto->id_producto}}/edit" class="btn btn-warning btn-xs">Modificar</a>
                            {!! Form::open(array('method' => 'DELETE','action' => ['ProductosController@destroy', $producto->id_producto])) !!}
                            <button  type="submit" onclick="return confirm('¿Seguro que deseas eliminar la categoria?')" class="btn btn-danger btn-xs" >Elimina producto</button>
                            {!! Form::close() !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>




@stop