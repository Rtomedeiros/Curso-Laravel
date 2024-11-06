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
        //Em uma Classe 'Schema' e o método 'table', acessar a tabela 'produtos' para:
        //- Com o método 'renameColumn' renomear a Coluna 'nomee' para 'nome', corrigindo-a
        //- Com o método 'drpColumn deletar ("dropar") a coluna 'nomecompleto'
        //Blueprint é um recurso de geração de código do Laravel
        Schema::table('produtos', function(Blueprint $table){
            $table->renameColumn('nomee', 'nome');
            $table->dropColumn('nomecompleto');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
