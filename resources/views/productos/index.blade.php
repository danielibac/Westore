@extends('master')

@section('contenido')
    <br>
    <div class="panel panel-default">
        <div><a href="/productos/create" class="btn btn-success ">Agregar nuevo producto</a>
        <a href="/categorias" class="btn btn-success ">Agregar nueva categoria</a></div>


            {!! Form::open(['url'=>'productos','method' =>'GET', 'class' =>'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
            <div class="form-group">
                {!! Form::text('id_producto',null,['class' => 'form-control', 'placeholder' =>'Ingrese id producto']) !!}
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
        {!! Form::close() !!}

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
            @if($productob->isEmpty())
                @foreach($productos as $producto)
                    <tr>
                        <td>{{$producto->id_producto}}</td>
                        <td>{{$producto->marca}}</td>
                        <td>{{$producto->modelo}}</td>
                        <td><a href="/productos/{{$producto->id_producto}}/edit" class="btn btn-warning btn-xs">Modificar</a>
                            {!! Form::open(array('method' => 'DELETE','action' => ['ProductosController@destroy', $producto->id_producto])) !!}
                            <button  type="submit" onclick="return confirm('�Seguro que deseas eliminar la categoria?')" class="btn btn-danger btn-xs" >Elimina producto</button>
                            {!! Form::close() !!}</td>
                    </tr>
                @endforeach
            @endif
            @if($productob->isEmpty() == false)
                @foreach($productob as $producto)
                    <tr>
                        <td>{{$producto->id_producto}}</td>
                        <td>{{$producto->marca}}</td>
                        <td>{{$producto->modelo}}</td>
                        <td><a href="/productos/{{$producto->id_producto}}/edit" class="btn btn-warning btn-xs">Modificar</a>
                            {!! Form::open(array('method' => 'DELETE','action' => ['ProductosController@destroy', $producto->id_producto])) !!}
                            <button  type="submit" onclick="return confirm('�Seguro que deseas eliminar la categoria?')" class="btn btn-danger btn-xs" >Elimina producto</button>
                            {!! Form::close() !!}</td>
                    </tr>
                @endforeach
            @endif



            </tbody>
        </table>
    </div>




@stop