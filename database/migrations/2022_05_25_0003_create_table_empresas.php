<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class createTableProdutos extends Migration
{
    public function up()
    {
        	Schema::create('Empresas', function (Blueprint $table)
	 {
           			$table->increments('id_local');
				  	 $table->integer('CEP');
            		$table->string('cidade', );
            		$table->string('estado', );
					$table->string('rua', );
					$table->string('bairro', );
                    $table->integer('número', );
            		$table->timestamps();
        	});
    }

    public function down()
    {
        	Schema::dropIfExists('Empresas');
    }
};