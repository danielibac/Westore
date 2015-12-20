
@extends('master')

@section('contenido')

    <h1>Crear productos</h1>

    {!! Form::open(array('method' => 'post', 'url' =>'productos', 'name' => 'form', 'files' => true)) !!}
        <div class="form-group  "></div>
            {!! Form::label('identificador_producto','Identificador del producto') !!}
            </br>
            {!! Form::text('identificador_producto',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group"></div>
            {!!Form::label('categoria','Categoria') !!}
            </br>
            {!!Form::select('categoria', $categorias) !!}
            {!!Form::submit('agregar categoria',['class' => ' btn btn-primary']) !!}
            {!!Form::submit('eliminar categoria',['class' => ' btn btn-primary ']) !!}

        </div>

        <div class="form-group"></div>
            {!! Form::label('descripcion_producto','Descripcion producto') !!}
            </br>
            {!! Form::textarea('identificador_producto',null,['class' => 'form-group']) !!}
        </div>

        <div class="form-group"></div>
            {!! Form::label('precio','precio') !!}
            </br>
            {!! Form::text('precio',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group"></div>
            {!! Form::label('cantidad_producto','Cantidad producto') !!}
            </br>
            {!! Form::text('cantidad_producto',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group"></div>
            {!! Form::label('marca','Marca') !!}
            </br>
            {!! Form::text('marca',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group"></div>
            {!! Form::label('modelo','Modelo') !!}
            </br>
            {!! Form::text('modelo',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group"></div>
            {!! Form::label('stock_minimo','Stock minimo') !!}
            </br>
            {!! Form::text('stock_minimo',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group"></div>
            {!! Form::label('cantidad_ficticia','Recomendacion cantidad para futuros pedidos') !!}
            </br>
            {!! Form::text('cantidad_ficticia',null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group"></div>
            {!! Form::label('agregar_imagen','Agregar imagen') !!}
            {!! Form::file('imagen') !!}

        </div>

        <div class="form-group"></div>
            {!! Form::submit('Agregar producto', ['class' => ' btn btn-primary']) !!}
        </div>



    {!! Form::close() !!}

@stop