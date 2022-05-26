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
           			$table->('id');
				  	$table->string('CEP');
            		$table->string('cidade') unsigned();
            1       $table->foreing('cidade')->references('cidade_trabalho')->on('funcionario');
            		$table->string('estado' );
					$table->string('rua');
					$table->string('bairro');
                    $table->string('número' );
            		$table->timestamps();
       });
    }

    public function down()
    {
        	Schema::dropIfExists('Empresas');
    }
};
