<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller
{
    /*
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $tarefa = Tarefa::all();

        return view('nivelUsuario/home', compact('tarefa'));

        /*foreach($tarefa as $c){
            echo $c->id;
            echo $c->nome;
            echo $c->email;
        }*/
    }

    public function create() {
        return view('nivelUsuario/criarTarefa');
    }

    public function store(Request $request) {
        $tarefa = new Tarefa();

        $tarefa->tituloTarefa=$request->txTitulo;
        $tarefa->descTarefa=$request->txDesc;
        $tarefa->prazo=$request->data;
        $tarefa->prioridade=$request->txPrioridade;
        $tarefa->created_at=date('Y-m-d H:i:s');
        $tarefa->updated_at=date('Y-m-d H:i:s');
        $tarefa->user_id = session('user_id');
        $tarefa->status_id = 1;

        $tarefa->save();

        return redirect('/homeTarefas');

        
    }
}
