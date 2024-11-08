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
            $table->string('imagem')->nullable(); //Coluna caminho da imagem do produto. Usando o método 'nullable()', caso produtos não tenham imagem, não é uma necessidade
            
            $table->unsignedBigInteger('id_user');  //Relacionamento com os usuários (1 usuário pode criar vários produtos)
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade'); //Definindo a chave estrangeira 'id_user'. Faz referência ao campo 'id' da tabela 'users'
            //Foi encadeado dois métodos onDelete('cascade') e onUpdate('cascade'), eles servem para Deletar e Atualizar os dados relacionados entre o usuário e o produto, caso o usuário é deletado ou atualizado, os produtos relacionados a ele tbm serão. Isto é para não ter registros orfãos no BD
            
            $table->unsignedBigInteger('id_categoria');  //Relacionamento com a tabela categorias
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');  //Definindo a chave estrangeira 'id_categoria'
            
            $table->timestamps();   //Cria duas Colunas na tabela, Created e Updated, uma com a data da criação de um registro e a outra com a data de atualização de um registro
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
