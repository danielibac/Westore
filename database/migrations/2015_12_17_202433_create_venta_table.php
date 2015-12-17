<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('venta', function(Blueprint $table)
		{
			$table->integer('id_producto');
			$table->primary('id_producto');
			$table->integer('id_cliente');
			$table->primary('id_cliente');
			$table->integer('id_medio_pago');
			$table->primary('id_medio_pago');
			$table->integer('numero_despacho');
			$table->primary('numero_despacho');
			$table->integer('id_producto');
			$table->foreign('id_producto')->references('id_producto')->on('producto');
			$table->integer('id_cliente');
			$table->foreign('id_cliente')->references('id_cliente')->on('cliente');
			$table->integer('id_medio_pago');
			$table->foreign('id_medio_pago')->references('id_medio_pago')->on('medio_pago');
			$table->integer('numero_despacho');
			$table->foreign('numero_despacho')->references('numero_despacho')->on('numero_despacho');
			$table->integer('cantidad_productos_venta');
			$table->float('subtotal_venta');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('venta');
	}

}
