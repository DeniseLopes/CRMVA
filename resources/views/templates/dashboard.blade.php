
@extends('layouts.app')
@section('content')
<!-- fonts-->
<link href='https://fonts.googleapis.com/css?family=Volkhov&display=swap'>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- Styles -->
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
    @yield('css')

<div class="container">
    
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                @extends('templates.sidebar')
         
                <div class="card-header">Página Inicial</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    <span> Bem vindo, {{Auth::user()->name}}!</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


  