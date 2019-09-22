<?php

namespace App\Http\Controllers;

use App\{Usuario, User, Nivel};
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;


class UsuarioController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*Todas as páginas que utilizarem este controlador passaram pelo filtro de auth, exceto o metodo index*/
 

    public function index()
    {
        //Usuario ativos
        $data = ['title' => 'Usuários'];
        $usuarios = Usuario::paginate(5);
        $flag = 1;
     
        return view('usuario.index', compact('usuarios', 'flag', 'data'));
    }
    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        

        return view('usuario.show',compact('usuario'));
    }
    public function create()
    {
        $data = [
            'title' => 'Cadastrar de Usuário',
            'url'  => url('usuario'),
            'nivel'=> Nivel::all()
        ];
        return view('usuario.form', compact('data'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        DB::beginTransaction();
        try {
            $nivel = Nivel::where('nome', $request->nivel)->get()->last();
            $user = User::create([
                'name' => $request->nome,
                'email' => $request->email,
                'password' => Hash::make($request->senha),
            ]);
            $usuario = Usuario::create([
                'nome' => $user->name,
                'user_id' => $user->id
            ]);
            $usuario->nivel()->associate($nivel);
            $usuario->save();
            DB::commit();

            return redirect('usuario')->with('success', 'Usuário cadastrado com sucesso!');
        } catch (Exception $e) {
            DB::rollback();
            return back()->with('error', 'erro ao tentar cadastrar usuário. cod: ' . $e);
        }
    }

    public function edit(Request $request, $id)
    {
        $data = [
            'title' => 'Editar Usuário',
            'url'  => url('usuario/' . $id),
            'nivel'=> Nivel::all()
        ];
        $usuario = Usuario::findOrFail($id);
        return view('usuario.form', compact('usuario', 'data'));
    }


    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $nivel = Nivel::where('nome', $request->nivel)->get()->last();
            $usuario = Usuario::findOrFail($id);
            $usuario->update($request->all());
            $usuario->nivel()->associate($nivel)->save();
        DB::commit();
            return redirect()->route('usuario.index')->with('success', 'Usuário atualizado com sucesso');    
        } catch (Exception $e) { 
            DB::rollback();
            return back()->with('error', 'erro ao tentar atualizar usuário. cod: ' . $e);
        }
    }

    public function destroy($id)
    {

        $usuario = Usuario::findOrFail($id);

        $usuario->delete();
        return back()->with('success', 'Usuário removido com sucesso');
    }

    public function restore($id)
    {
        $usuario = Usuario::onlyTrashed()->findOrFail($id);
        $usuario->restore();
        return back();
    }

    public function inativos(){
        $usuariosInativos = Usuario::onlyTrashed()->paginate(5);
        $flag = 0;
        $data = ['title' => 'Usuários Inativos'];
        //dd($usuarioInativo);
        return redirect('/usuario')->with('success','Usuario restaurado com sucesso');
    }
}
