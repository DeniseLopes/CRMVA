<?php

namespace App\Http\Controllers;

use App\{Cliente, Documento, Endereco, Telefone};
use Illuminate\Http\Request;
use DB;
use Exception;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['title' => 'Clientes'];
        $clientes = Cliente::paginate(5);
        $flag = 1;

        return view('cliente.index', compact('clientes', 'flag', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Cadastrar Cliente',
            'url'  => url('cliente'),
        ];
        return view('cliente.form', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());
        DB::beginTransaction();
        try {
            $cliente = Cliente::create($request->all());

            if ($request->cep != null) {
                $endereco = Endereco::create(['cliente_id' => $cliente->id,  'cep' => $request->cep]);
                $endereco->update($request->all());
                dd($cliente->enderecos);
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

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

    public function inativos()
    {
        $usuariosInativos = Usuario::onlyTrashed()->paginate(5);
        $flag = 0;
        $data = ['title' => 'Usuários Inativos'];
        //dd($usuarioInativo);
        return view('usuario.index', compact('usuariosInativos', 'flag', 'data'));
    }
}
