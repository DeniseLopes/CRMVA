@extends('layouts.app')
@section('content')
<!--TODOS OS USUARIOS-->

<div class="row justify-content-center ">
    <div class="col-md-8">
        <div class="card">         

            <div class="card-header">Página Inicial de Usuarios</div>

            <div class="card-body">
                @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif


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
                            <td><a class='btn btn-info btnEdit' href="{{url('/usuario/'.$usuario->id.'/edit')}}">editar</a></td>

                            <td>
                                <form method="POST" action="{{url('/usuario/'. $usuario->id)}}">
                                    @method('delete')
                                    @csrf
                                    <button type="subimit" class='btn btn-danger'>remover</button>
                                </form>
                                @endforeach

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!--USUARIOS INATIVOS-->

<div class="row justify-content-center ">
    <div class="col-md-8">
        <div class="card">         

            <div class="card-header">Usuarios Inativos</div>

            <div class="card-body">
                @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif


                <table class="table">

                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>

                            <th scope="col" colspan='2'>Opções</th>
                        </tr>
                    </thead>
                    @foreach($usuariosDeletados as $usuario)

                    <tbody>
                        <tr>
                            <th scope="row">{{$usuario->id}}</th>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                           

                            <td>
                                <form method="POST" action="{{url('/restore/'. $usuario->id)}}">
                                    @method('put')
                                    @csrf
                                    <button type="subimit" class='btn btn-danger'>Restaurar</button>
                                </form>
                                @endforeach

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@yield('js')
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<!-- <script type="text/javascript">
$(document).ready(function(){
    $('.btnEdit').click(function(){
        alert((this).dataset.id);
    })

});



</script> -->