<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//Importando o Model 'User'
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Utilizando o Model 'User' e o método 'create', para poder criar um registro de usuário na tabela 'users'
        User::create([
            'firstName' => 'Renato',
            'lastName' => 'Medeiros',
            'email' => 'contato@renato.com',
            'password' => bcrypt('12345678'),   //Criando um registro encriptado no campo
        ]);
    }
}
