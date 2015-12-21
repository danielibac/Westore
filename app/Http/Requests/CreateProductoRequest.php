<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProductoRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'id_producto' => 'required',
			'id_categoria' => 'required',
			'descripcion_producto' => 'required',
			'precio' => 'required',
			'cantidad_producto' => 'required',
			'marca' => 'required',
			'modelo' => 'required',
			'variable_holgura' => 'required',
			'cantidad_ficticia_compra' => 'required',
			'imagen' => 'required'

			//
		];
	}

}
