<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller {

	public function create(){
        $categorias = Categoria::lists('id_categoria');
        return view('productos.create', compact('categorias'));

    }

    public function store(){
        $path = 'uploads/imagenes';

        $file = Request::file('imagen');
        //$archivo = $file->getClientOriginalName();
        //$uploads = $file->move($path,$archivo);

        //if(uploads){

        Request::file('archivo')->move($path);
            $inputs=Request::all();
            Producto::create($inputs);
            return redirect('/');

        //}

    }

}
