@extends('layouts.app')
@section('content')
<div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                
         
                <div class="card-header">Página Inicial de Usuarios</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    
                    <div class="table">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                       
                            <th scope="col" colspan='2'>Opções</th>
                            </tr>
                        </thead>
                        @foreach($usuarios as $usuario)
                        
                        <tbody>
                            <tr>
                            <th scope="row">{{$usuario->id}}</th>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                      
                            <td><a class='btn btn-info'>editar</a></td>
                            <td><a class='btn btn-danger'>remover</a></td>
                            </tr>
                            
                        </tbody>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
