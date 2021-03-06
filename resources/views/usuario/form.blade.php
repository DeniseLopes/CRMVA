@extends('template')
@section('title', $data['title'])
@section('body')
<!-- Styles -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if(session('message'))
            <div class="alert alert-warning">
                {{ session('message') }}
            </div>
            @endif
            <form method="POST" action="{{ $data['url'] }}">
                @if(isset($usuario))
                @method('PUT')
                @endif

                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Nome') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nome" value="{{(!isset($usuario)) ? old('name'): $usuario->nome}}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right text-dark">{{ __('E-Mail') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{(!isset($usuario)) ? old('email') : $usuario->user->email}}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                @if(!isset($usuario))
                <div class="form-group row">
                    <label for="senha" class="col-md-4 col-form-label text-md-right text-dark">Senha</label>

                    <div class="col-md-6">
                        <input id="senha" type="password" class="form-control" name="senha" required>


                    </div>
                </div>

                <!--Confirmar senha-->
                <div class="form-group row">
                    <label for="Csenha" class="col-md-4 col-form-label text-md-right text-dark">Confirmar Senha</label>

                    <div class="col-md-6">
                        <input id="Csenha" type="password" class="form-control" name="Csenha" required>

                    </div>
                </div>

                @endif
                <div class="form-group row">
                    <label class=" col-md-4  col-form-label text-md-right" for="s">Nível</label>
                    <div class="col-md-6">
                        <select name ="nivel" class="custom-select " id="inputGroupSelect01">
                            @foreach($data['nivel'] as $nivel)
                            <option value="{{$nivel->nome}}"{{ isset($usuario) && isset($usuario->nivel) && ($usuario->nivel->nome == $nivel->nome) ? 'selected' : '' }}>{{$nivel->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>



                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary btn-lg">
                            {{ __('Salvar') }}
                        </button>
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>
@endsection