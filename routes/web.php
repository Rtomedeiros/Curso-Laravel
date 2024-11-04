<?php

use Illuminate\Support\Facades\Route;

#Route::get('/', function () {
#    return view('welcome');
#});

#//Criando uma nova rota
#/*Route::get('/empresa', function(){
#    return view('site/empresa');
#});*/
#
#//Criando uma rota 'any' => Permite todo tipo de acesso http
#Route::any('/any', function(){
#    return "Permite todo tipo de acesso http(put, delete, get, post)";
#});
#
#//Criando uma rota 'match' => Permite apenas acessos definidos
#Route::match([/*'get', 'post'*/  'put', 'delete'], '/match', function(){
#    return "Permite apenas acessos definidos";
#});
#
#//Rota com passagem de parâmetros. Caso queira passar parâmetros opcionais, colocar '?' 
#//na variárel correspondente ao parâmetro e fornecer um valor padrão, podendo ser nulo.
#Route::get('/produto/{id}/{cat?}', function($id, $cat = ''){
#    return "O id do produto é:".$id."<br>"."A categoria é:".$cat;
#});
#
#//Redirecionamento entre rotas
#/*Route::get('/sobre', function(){
#    return redirect('/empresa');
#});*/
#
#//Uma forma mais simples de fazer o redirecionamento entre rotas
#Route::redirect('/sobre', '/empresa');
#
#//Refazendo a rota site/empresa de uma maneira mais reduzida utilizando o view
#Route::view('/empresa', 'site/empresa');
#
#//Criando uma rota e atribuir um nome a ela
#Route::get('/news', function(){
#    return view('news');
#})->name('noticias');
#
#//Criando uma outra rota como exemplo, para fazer um redirecionamento usando o nome da rota '/news'
#Route::get('/novidades', function(){
#    return redirect()->route('noticias');
#});
#//Como o redirecionamento esta ocorrendo pelo nome da rota '/news', 
#//pode-se alterar esta rota que o redirecionamento ocorre normalmente. Ex.: alterar '/news' para 'timesnownews'

/*
//Criando grupos de rotas, vinculadas atraves do prefix 'admin'
Route::prefix('admin')->group(function(){
    Route::get('dashboard', function(){
        return "dashboard";
    });
    
    Route::get('users', function(){
        return "users";
    });
    
    Route::get('clientes', function(){
        return "clientes";
    });
});
*/

/*
//Alterando a rota '/' para usar de exemplo para redirecionar usando o grupo de rotas vinculadas pelo nome. 
//No exemplo, está redirecionando do '/' para o '/admin/clientes'
Route::get('/', function () {
    return redirect()->route('admin.clientes');
});
*/

/*
//Criando grupos de rotas, vinculadas atraves do nome das rotas
Route::name('admin.')->group(function(){
    Route::get('admin/dashboard', function(){
        return "dashboard";
    })->name('dashboard');
    
    Route::get('admin/users', function(){
        return "users";
    })->name('users');
    
    Route::get('admin/clientes', function(){
        return "clientes";
    })->name('clientes');
});
*/

/*
//Criando grupos de rotas, vinculadas de forma composta, usando por exemplo, prefix e name juntos
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'  //O 'as' vem de 'como' em Portugues, ou seja, o grupo tem o prefixo 'admin' conhecido COMO (nome) 'admin.'
], function(){
    Route::get('dashboard', function(){
        return "dashboard";
    })->name('dashboard');
    
    Route::get('users', function(){
        return "users";
    })->name('users');
    
    Route::get('clientes', function(){
        return "clientes";
    })->name('clientes');
});
*/

//Informando o Namespace do ProdutoController
//use App\Http\Controllers\ProdutoController;

//Recriando a rota '/' para trabalhar com os controllers
//Declarando o Controller e o método da classe
//Recomendável nomear as rotas
#Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');

//Trabalhando com Parâmetros com o Controller
//Criando uma rota com passagem de parâmetros para o Controller
//O método declarado se chama 'show', para exibir os detalhes do Produto
#Route::get('/produto/{id?}', [ProdutoController::class, 'show'])->name('produto.show');
//Deixando a passagem do parametro id na rota de forma opcional com a '?'

//Informando o novo Namespace do ProdutoController com Resource
use App\Http\Controllers\ProdutoController;

//Criando uma Rota para o Controller com Resource
Route::resource('produtos', ProdutoController::class);
