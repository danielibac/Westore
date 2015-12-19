
@extends('master')

@section('contenido')

    <h1>Crear productos</h1>


    {!! Form::open() !!}
        <div class="form-group"></div>
            {!! Form::label('identificador_producto','Identificador del producto') !!}
            </br>
            {!! Form::text('identificador_producto',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group"></div>
            {!!Form::label('categoria','Categoria') !!}
            </br>
            {!!Form::select('categoria', $categorias) !!}

        </div>

        <div class="form-group"></div>
            {!! Form::label('identificador_producto','Identificador del producto') !!}
            </br>
            {!! Form::text('identificador_producto',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group"></div>
            {!! Form::label('identificador_producto','Identificador del producto') !!}
            </br>
            {!! Form::text('identificador_producto',null,['class' => 'form-control']) !!}
        </div>



    {!! Form::close() !!}

@stop