<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class createTableProdutos extends Migration
{
    public function up()
    {
        	Schema::create('Categorias', function (Blueprint $table)
	 {
           			$table->('id') unsigned();
                $table->foreing('id_categoria')->references('categoria')->on('produto');
				  	    $table->string('alimento');
            		$table->string('roupas') 
            		$table->string('prod_limpeza');
					      $table->string('cosmeticos');
					      $table->string('papelaria');
            		$table->timestamps();
       });
    }

    public function down()
    {
        	Schema::dropIfExists('Categorias');
    }
};
