@extends('template')
@section('title', $usuario->nome)
@section('body')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if(session('message'))
            <div class="alert alert-warning">
                {{ session('message') }}
            </div>
            @endif
            <form method="POST" action="#">


                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right text-dark">{{ __('Nome') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nome" value="{{ $usuario->nome }}" disabled="disabled">

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
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" disabled="disabled" value="{{ $usuario->user->email}}">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right text-dark">Nivel</label>

                    <div class="col-md-6">
                        <input  class="form-control"  disabled="disabled" value="{{ isset($usuario->nivel) ? $usuario->nivel->nome : ''}}">


                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <a href="{{url('usuario')}}" class="btn btn-primary btn-md">
                          Voltar
                        </a>
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>

@endsection