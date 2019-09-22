@extends('template')
@section('title',$data['title'])
@section('body')
@if($flag == 1)

<table class="table text-center ">

    <thead class="">

        <div class="col-12 text-right mb-4">
            <a class="btn btn-success btn-sm" href="{{url('/usuario/create')}}">
                <i class="material-icons" style="vertical-align:middle; font-size:25px;">note_add</i>Adicionar
            </a>
            <a class="btn btn-danger btn-sm" href="{{ url('usuario/inativos')}}">
                <i class="material-icons" style="vertical-align:middle; font-size:25px;">delete</i>Inativos
            </a>
        </div>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Visualizar</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->nome}}</td>
            <td>{{$usuario->user->email}}</td>
            <td>
                <a href="{{ url('usuario/'. $usuario->id ) }}"><button class="btn btn-primary btn-sm"> <i class="material-icons">remove_red_eye</i></button></a>
            </td>
            <td>
                <a class="btn btn-sm btn-info" href="{{url('usuario/'.$usuario->id .'/edit')}}">
                    <i class="material-icons">border_color</i>
                </a>
            </td>
            <td>
                <form method="POST" action="{{url('usuario/'. $usuario->id)}}" id="formDelete">
                    @method('delete')
                    @csrf
                    <button type="submit" data-id="{{$usuario->id}}" class="btn btn-sm btn-danger del" data-toggle="modal" data-target="#modal">

                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="100%" class="text-center">
                <p class="text-cetner">
                    Página {{$usuarios->currentPage()}} de {{$usuarios->lastPage()}}
                    -Exibido {{$usuarios->perPage()}} registro(s) por página. Total de itens: {{$usuarios->total()}}
                </p>
            </td>
        </tr>
        @if($usuarios->lastPage() > 1)
        <tr>
            <td colspan="100%" class="text-center"  >
                {{ $usuarios->links() }}
            </td>
        </tr>
        @endif
    </tfoot>
</table>
@else
<table class="table text-center ">

    <thead class="">

        <div class="col-12 text-right mb-4">
          
            <a class="btn btn-info btn-sm" href="{{ url('usuario')}}">
                <i class="material-icons" style="vertical-align:middle; font-size:25px;">keyboard_backspace</i>Voltar
            </a>
        </div>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Restaurar</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($usuariosInativos as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->nome}}</td>
            <td>{{$usuario->user->email}}</td>
            <td>
                <a href="{{ url('usuario/'. $usuario->id .'restore') }}"><button class="btn btn-primary btn-sm"> <i class="material-icons">restore_from_trash</i></button></a>
            </td>
       
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="100%" class="text-center">
                <p class="text-cetner">
                    Página {{$usuariosInativos->currentPage()}} de {{$usuariosInativos->lastPage()}}
                    -Exibido {{$usuariosInativos->perPage()}} registro(s) por página. Total de itens: {{$usuariosInativos->total()}}
                </p>
            </td>
        </tr>
        @if($usuariosInativos->lastPage() > 1)
        <tr>
            <td colspan="100%" class="text-center"  >
                {{ $usuariosInativos->links() }}
            </td>
        </tr>
        @endif
    </tfoot>
</table>
@endif
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Atenção</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Você tem certeza que deseja excluir este usuário?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger" id="excluir">Excluir</button>
            </div>
        </div>
    </div>
</div>

@endsection

@yield('js')
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.del').click(function(e) {
            e.preventDefault()

        })

        $('#excluir').click(function() {
            $('#formDelete').submit()
        })
    })
</script>