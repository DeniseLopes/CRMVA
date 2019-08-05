<?php

namespace App\Http\Controllers;
use App\User;
use App\Usuario;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*Todas as páginas que utilizarem este controlador passaram pelo filtro de auth, exceto o metodo index*/
    public function __construct(){
        $this->middleware('auth')->except(['index']);
    }

    public function index(User $usuario)
    {
        $usuarios = $usuario->all();
        return view('usuario.index',compact('usuarios'));
    }

    public function store(Request $request)
    {
        $usuario = new Usuario;
        $usuario->create($request->all());
        return redirect('/usuario');
    }

    
   /* public function show($id)
    {
        //listar
    }

   /* public function edit(User $id)
    {
       
        $usuario = Usuario::findOrFail($id);
         return view('usuario.index', compact('usuarios'));
    }
*/
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
