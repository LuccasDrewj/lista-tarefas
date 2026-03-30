<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', compact('users'));
    }

    public function indexApi()
    {
        $usersAPI = User::all();
        return $usersAPI;
    }

    public function viewLogin()
    {
        return view('/nivelUsuario/login');
    }

    public function login(Request $request)
    {

        // 1. Mapeia os campos do formulário para o que o Laravel exige
        $credenciais = [
            'email'    => $request->email,
            'password' => $request->senha
        ];

        // 2. Tenta o login usando o array $credenciais (SEM o '!' no início)
        if (Auth::attempt($credenciais)) {

            // Se deu certo, o Laravel já logou o usuário. 
            // Agora pegamos os dados para a sua sessão customizada:
            $user = Auth::user();
            session([
                'usuario' => $user->name,
                'user_id' => $user->id
            ]);

            return redirect()->intended('/homeTarefas');
        }

        // 3. Se falhar, volta para o login com erro
        return redirect('/login')->with('erro', 'Email ou senha incorretos!');

        /*$user = User::where('email', $request->email)
        ->where('password', $request->senha)
        ->first();

        if($user){
            
            session(['usuario' => $user->name,'user_id' => $user->id]);

            return redirect('/homeTarefas');
        } else {
            $erro = "Email ou senha incorreto!";
            return view('nivelUsuario/login', compact('erro'));
        }*/
    }

    public function deslogar()
    {
        session_destroy();

        return redirect('/login');
    }

    public function home()
    {
        return view('nivelUsuario.homeTarefas', compact('tarefa'));
    }

    public function homePerfil()
    {
        return view('nivelUsuario/perfilUsuario');
    }

    public function create()
    {
        return view('nivelUsuario/cadastrarUser');
    }

    public function store(Request $request)
    {

        $user = new user();

        $user->name = $request->txNome;
        $user->email = $request->txEmail;
        $user->password = Hash::make($request->txSenha);
        $user->created_at = date('Y-m-d H:i:s');
        $user->updated_at = date('Y-m-d H:i:s');

        $user->save();

        return redirect('/login');
    }

    public function storeApi(Request $request)
    {
        $user = new user();

        $user->name = $request->nome;
        $user->email = $request->email;
        $user->password = $request->senha;
        $user->created_at = date('Y-m-d H:i:s');
        $user->updated_at = date('Y-m-d H:i:s');

        $user->save();
    }

    public function updateApi(Request $request, string $id)
    {
        $validarDados = $request->validate([
            'name' => 'min:3',
            'email' => 'max:100',
            'password' => 'min:8',
            'data' => 'date'
        ]);

        $user = User::findOrfail($id);
        $user->update($validarDados);

        return response()->json(
            ['mensagem' => 'Criado com sucesso!', 'user' => $user],
            200
        );
    }

    public function destroyApi(string $id)
    {
        User::where('id', $id)->delete();

        return response()->json([
            'mensagem' => "User excluido!",
            'code' => 200
        ]);
    }

    public function exibirJson()
    {
        return response()->json(
            User::get(),
            200
        );
    }
}
