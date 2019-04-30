@extends('templates.master')

@section('title', 'Page Title')
@section('content')
<div class="row justify-content-center align-items-center" id="body" style="min-height:100vh; " >
    <div class="col-10 col-sm-8 col-md-6 col-lg-4 text-center bg-dark" style=" opacity: .85" id="form">
        <div class="card bg-dark " >
            <div class="card-header">
                <h5 class="card-title text-info">Kosloski Vistos</h5>
                <h6 class="card-subtitle mb-2 text-info">Gerenciador de visto americano.</h6>
            </div>
            <div class="card-block " >
                {!! Form::open(['route' => 'user.login','method' => 'post']) !!}

                <p class="text-info">Acesse o sistema</p>

                <!--CAMPO E-MAIL -->
                <div class="form-group text-info" >
                    <label for='email'>
                        {!!Form::text('email', null, ['class' => 'form-control', 'placeholder' =>'Usuário']) !!}
                    </label>

                </div>

                <!--CAMPO SENHA -->
                <div class="form-group text-info">
                    <label for="password">
                        {!! Form::password('password', ['class'=> 'form-control', 'placeholder' => 'Senha']) !!}
                    </label>
                </div>

                <!--CAMPO BOTAO -->
                <div class="form-group">
                    <label>
                        {!!Form::submit('Entrar', ['class'=>'btn btn-success ','style'=>'width:30vh'])!!}
                    </label>
                </div>

                {!! Form::close() !!}
            </div>
        
        </div>
    </div>
</div>
<style>
#body{
    background-image:url('img/ny.jpg');
    background-size: cover;
}
#form{
    border-radius: 5px;

}
</style>
@endsection