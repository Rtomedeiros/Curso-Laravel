<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Definindo o namespace do Model 'Produto'
use App\Models\Produto;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return "index";
        
        //Criando um objeto produtos
        //Usando o método all(), do ELOQUENT (ORM do Laravel, Object Relacional Model) 
        //ORM serve para mapear uma tabela do BD para uma classe, de forma automática
        //O Model Produto ele representa a tabela Produtos no BD
        //O Laravel faz uma pluralização, relacionando de forma automática, Model Produto = Tabela Produtos (Mas nem sempre dá certo isso!)
        //O Eloquent é interessante para fazer a manipulação do BD sem a necessidade de usar comandos ou consultas SQL.
        $produtos = Produto::all();
        return dd($produtos); //Para debugar o obj. produtos.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
