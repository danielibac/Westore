@extends ('master')

@section('contenido')
    <br>
    <br>

    <div class="panel panel-default">
        <div class="panel-heading"> Inicio</div>
        <table class="table-responsive table-bordered">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>Contrasena</th>
                <th>Email</th>
            </tr>

            </thead>

            <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                <td>{{$cliente->nombre_cliente}}</td>
                <td>{{$cliente->apellido_p}}</td>
                <td>{{$cliente->apellido_m}}</td>
                <td>{{$cliente->contasena_cliente}}</td>
                <td>{{$cliente->email_cliente}}</td>
                     <td>
                    <a href="/clientes/{{$cliente->id_cliente}}/edit" class="btn btn-warning btn-xs">Editar</a>
                         <a href="/clientes/{{$cliente->id_cliente}}" class="btn btn-success btn-xs">Mi cuenta</a>
                     </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>



@stop