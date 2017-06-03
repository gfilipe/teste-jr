<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
		Schema::create('vendas', function($table)
        {
            $table->increments('id_venda');
            $table->string('nome_vendedor',255);
            $table->text('email');
            $table->text('produto');
			$table->double('valor_venda',10,2);
			$table->double('porcentagem_comissao',10,2);
			$table->double('valor_comissao',10,2);
            $table->timestamp('data_venda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vendas');
    }
}
