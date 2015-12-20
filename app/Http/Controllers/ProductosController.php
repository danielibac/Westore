<?php namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Producto;
use App\Imagen;
use Request;
use Input;



class ProductosController extends Controller {

	public function create(){
        $categorias = Categoria::lists('nombre_categoria','id_categoria');
        return view('productos.create', compact('categorias'));

    }

    public function store(Request $request){
        $path = 'uploads/imagenes';

        $file = Request::file('imagen');
        $archivo = $file->getClientOriginalName();
        $uploads = $file->move($path,$archivo);

        //if(uploads){

            //Request::file('imagen')->move($path);
            $inputs=Request::all();
            Producto::create($inputs);
            //Imagen::create($inputs);
            //agregado
            $inputss= Input::All();
            $n=new Imagen;
            $n->id_producto=$inputss['id_producto'];
            $n->ruta_imagen=$archivo;
        $n->save();






            return redirect('/productos/crear');

        //}

    }

    public function destroy($id)
    {
        return "Eliminando el registro $id";
    }

}
