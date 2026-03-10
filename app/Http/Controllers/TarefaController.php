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

        return view('tarefa')->with('tarefa', $tarefa);

        /*foreach($tarefa as $c){
            echo $c->id;
            echo $c->nome;
            echo $c->email;
        }*/
    }

    public function create() {
        return view('nivelUsuario/criarTarefa');
    }

    public function store() {
        $tarefa = new Tarefa();

        
    }
}
