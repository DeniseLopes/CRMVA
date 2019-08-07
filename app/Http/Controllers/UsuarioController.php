<?php

namespace App\Http\Controllers;

use App\User;
use App\Usuario;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*Todas as páginas que utilizarem este controlador passaram pelo filtro de auth, exceto o metodo index*/
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index(User $usuario)
    {
        $usuarios = $usuario->all();
        return view('usuario.index', compact('usuarios'));
    }

    public function edit(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
        return view('auth.register', compact('usuario'));
    }


    public function update(Request $request, $id)
    {
        //   dd($request->all());

        $usuario = User::findOrFail($id);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,

        ];
        $senha = $data['password'];

        if (strlen($senha) >= 8) {
            $data['password'] = Hash::make($data['password']);
            $usuario->update($data);
        } else {
            return back()->with('message', 'A senha deve conter no minimo 8 digitos');
        }

      
        return redirect()->route('usuario.index')->with('message', 'Usuário atualizado com sucesso');
    }
    
    public function destroy($id)
    {
    
        $usuario = User::findOrFail($id);
      
        $usuario->delete();
        return back()->with('message', 'Usuário removido com sucesso');
    }
    
}
