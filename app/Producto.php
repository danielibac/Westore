<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model {

	//
    protected $table = 'producto';
    protected $fillable = [
        'id_producto',
        'id_categoria',
        'descripcion_producto',
        'precio',
        'cantidad_producto',
        'variable_holgura',
        'cantidad_ficticia_compra',
        'marca',
        'modelo'

    ];
}
