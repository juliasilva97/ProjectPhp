<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createTableProdutos extends Migration
{
    public function up()
    {
        	Schema::create('Produtos', function (Blueprint $table)
	 {
           			$table->increments('id');
            		$table->string('nome', );
            		$table->string('categoria', );
					$table->string('lote', );
					$table->string('validade', );
                    $table->string('preco', );
            		$table->integer('registro');
            		$table->timestamps();
      });
    }

    public function down()
    {
        	Schema::dropIfExists('Produtos');
    }
};
