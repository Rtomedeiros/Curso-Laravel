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
        //Com a classe 'Schema', usando o método 'rename' para renomear a tabela produto
        Schema::rename('produtos', 'produto');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
