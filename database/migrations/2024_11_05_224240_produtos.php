<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            //Inserindo colunas na tabela 'produtos'
            $table->string('nome'); //Coluna nome do produto
            $table->text('descricao');  //Coluna descricao do produto
            $table->double('preco', 10, 2);  //Coluna preco do produto, '10, 2' representa as casas decimais do preco (valor tem 10 digitos, 2 deles estão a direita da vírgula)
            $table->string('slug'); //Coluna slug do produto, um título para a URL!
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
