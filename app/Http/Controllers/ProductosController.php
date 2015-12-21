<?php namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Requests\CreateProductoRequest;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Producto;
use App\Imagen;
use Request;
use Input;



class ProductosController extends Controller {

    public function index(){
        return view(productos.index);
    }

	public function create(){
        $categorias = Categoria::lists('nombre_categoria','id_categoria');
        return view('productos.create', compact('categorias'));

    }

    public function store(CreateProductoRequest $request){
        $path = 'uploads/imagenes';

        $file = Request::file('imagen');
        $archivo = $file->getClientOriginalName();
        $uploads = $file->move($path,$archivo);

        //if(uploads){

            //Request::file('imagen')->move($path);
           // $inputs=Request::all();
            Producto::create($request->all());
            //Imagen::create($inputs);
            //agregado
            $inputs= Input::All();
            $n=new Imagen;
            $n->id_producto=$inputs['id_producto'];
            $n->ruta_imagen=$archivo;
        $n->save();






            return redirect('/productos/crear');

        //}

    }
    public function edit($id){
        $producto= Producto::find($id);
        $categorias = Categoria::lists('nombre_categoria','id_categoria');
        return view('productos.edit', compact('producto', 'categorias'));


    }

    public function update($id, CreateProductoRequest $recuest){
        $producto= Producto::find($id);
        $producto->update($recuest->all());
        return redirect('productos');
    }

    public function destroy($id)
    {
        return "Eliminando el registro $id";
    }

}
