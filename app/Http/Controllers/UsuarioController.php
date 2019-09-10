<?php

namespace App\Http\Controllers;

use App\User;
use App\Usuario;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    public $dadosTemplate;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*Todas as páginas que utilizarem este controlador passaram pelo filtro de auth, exceto o metodo index*/
    public function __construct()
    {
        $this->middleware('auth')->except('index');
        $moduleInfo = [
            'icon' => 'store',
            'name' => 'Estoque',
        ];
        $menu = [
            ['icon' => 'shopping_basket', 'tool' => 'Produto', 'route' => url('/')],
            ['icon' => 'format_align_justify', 'tool' => 'Categoria', 'route' => url('/')],
            ['icon' => 'store', 'tool' => 'Estoque', 'route' => url('estoque')],
        ];
        $this->dadosTemplate = [
            'moduleInfo' => $moduleInfo,
            'menu' => $menu,
        ];
    }

    public function index(User $usuario)
    {
        //Usuario ativos
        $usuarios = User::all();

        //Excluido e não excluido
        $usuariosDeletados = User::onlyTrashed()->get();
        return view('usuario.index', compact('usuarios', 'usuariosDeletados'));
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

    public function restore($id)
    {
        $usuario = User::onlyTrashed()->findOrFail($id);
        $usuario->restore();
        return back();
    }
}
