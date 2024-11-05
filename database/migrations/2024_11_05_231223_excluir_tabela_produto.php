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
        //Com a classe 'Schema' e o método 'dropIfExists'
        //fazer uma exclusão da tabela 'produto'
        Schema::dropIfExists('produto');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
