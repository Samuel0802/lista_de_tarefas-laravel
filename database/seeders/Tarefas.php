<?php

namespace Database\Seeders;
use App\Models\TarefasSistema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Tarefas extends Seeder
{
  
    public function run(): void
    {
         TarefasSistema::create(
            [ 
                'tarefas' => 'Realizar tarefas de casa' //dados fake teste
                ]
      
         );
    }
}
