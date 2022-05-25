<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createTableFuncionarios extends Migration
{
    public function up()
    {
        	Schema::create('Funcionarios', function (Blueprint $table)
	 {
           			$table->increments('id');
            		$table->string('nome', );
            		$table->string('RG', );
					$table->string('CPF', );
					$table->string('cargo', );
					$table->string('salário', );
            		$table->timestamps();
        });
    }

    public function down()
    {
        	Schema::dropIfExists('Funcionarios');
    }
};
