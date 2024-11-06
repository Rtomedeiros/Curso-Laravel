<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    
    //Especificando o nome da tabela 'produtos' dentro do Model Produto, pra não depender da pluralização automática do Laravel!
    protected $table = 'produtos';
}
