<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

	//
    protected $table = 'categoria';
    protected  $primaryKey = 'id_categoria';
    protected $fillable = [
    'id_categoria',
    'nombre_categoria'
    ];
}
