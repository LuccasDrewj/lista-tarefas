<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', compact('users'));
    }

    public function viewLogin() {
        return view('/nivelUsuario/login');
    }

    public function login(Request $request){
        $user = User::where('email', $request->email)
        ->where('password', $request->senha)
        ->first();

        if($user){
            
            session(['usuario' => $user->name,'user_id' => $user->id]);

            return redirect('/homeTarefas');
        } else {
            $erro = "Email ou senha incorreto!";
            return view('nivelUsuario/login', compact('erro'));
        }
    }

    public function home(){
        return view('nivelUsuario.homeTarefas', compact('tarefa'));
    }

    public function create() {
        return view('nivelUsuario/cadastrarUser');
    }

    public function store(Request $request) {

        $user = new user();

        $user->name=$request->txNome;
        $user->email=$request->txEmail;
        $user->password=$request->txSenha;
        $user->created_at=date('Y-m-d H:i:s');
        $user->updated_at=date('Y-m-d H:i:s');

        $user->save();

        return view('nivelUsuario.CadastrarUser');

    }
}
