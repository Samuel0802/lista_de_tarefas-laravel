<?php

namespace App\Http\Controllers;

use App\Http\Requests\formRequestTarefas;
use App\Models\TarefasSistema;
use Illuminate\Http\Request;

class TarefasController extends Controller
{

// CADASTRAR TAREFAS
 public function cadastrarTarefas(formRequestTarefas $request){

    if($request->method() == "POST"){ 
        $data = $request->all(); 
        
        TarefasSistema::create($data); //pegando do models para criação dos dados

        return redirect()->route('home'); //se criação for com sucesso joga pra tela home
    }

    $itens = TarefasSistema::pluck('tarefas', 'id'); //pluck() = do Eloquent ORM para consultar a tabela 
   //specifica a coluna da qual queremos extrair os valores para compor o array resultante.
  //O segundo argumento 'id' especifica a coluna que será usada como chave para o array resultante.

  $totalTarefa = $this->countTarefas();

    return view('pages.tarefas', compact('itens','totalTarefa'));//renderizar nomes e contagem de tarefas
 }

//CONTA TAREFAS
 public function countTarefas(){ //Função de contar as tarefas
    $find = TarefasSistema::all()->count(); //Vai realizar a contagem de todos os clientes

    return  $find;  
 }

 public function deleteTarefas(Request $request)
 {
     $id = $request->id;
     $buscaRegistro = TarefasSistema::find($id);
     $buscaRegistro->delete();

     return redirect()->route('home');;
 }


}
