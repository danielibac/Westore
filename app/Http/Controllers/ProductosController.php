<?php namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Requests\CreateProductoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;
use App\Imagen;
//use Request;
use Input;
use DB;
use File;



class ProductosController extends Controller {

    public function index(Request $recuest){
        $productob=Producto::id_producto($recuest->get('id_producto'))->orderBy('id_producto','marca')->paginate();

        $productos=Producto::all();
        return view('productos.index', compact('productos','productob'));
    }
    public function show(){
        return view('productos.index');
    }

	public function create(){
        $categorias = Categoria::lists('nombre_categoria','id_categoria');
        return view('productos.create', compact('categorias'));

    }

    public function store(CreateProductoRequest $request){
        $path = 'uploads/imagenes';

        $file = \Request::file('imagen');
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






            return redirect('/productos');

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
        $imagen = DB::table('imagen')->where('id_producto', $id)->delete();

        //File::delete('/uploads/imagenes/' . $imagen->ruta_imagen);

        //$query = DB::table('imagen')->where('id_producto', '=', $id);
        //$imagen = $query->first();
        //print_r($image);
        //return 'end';
        //File::delete(public_p . '/uploads/imagenes/thumb-' . $image->path);
        //File::delete('/uploads/imagenes/' . $imagen->ruta_imagen);

        //var_dump($imagen->id_producto);
        //$query->delete();
        $producto=Producto::find($id);
        $producto->delete();
        return redirect('productos');
    }

}
