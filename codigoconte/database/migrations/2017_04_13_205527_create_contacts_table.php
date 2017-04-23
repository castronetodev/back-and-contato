<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome_empresa');
            $table->integer('tel');
            $table->integer('cel');
            $table->string('email');
            $table->string('endereco');
            $table->string('bairro');
            $table->integer('numero');
            $table->string('referencia');
            $table->string('desc');
			$table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
			$table->integer('cities_id')->unsigned();
            $table->foreign('cities_id')->references('id')->on('cities');
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
		Schema::drop('contacts');
	}

}
