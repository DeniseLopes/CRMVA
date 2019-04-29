
@section('content')

        <div class="row justify-content-center align-items-center" style="height:100%">
        <div class="col-xm-12 col-sm-10 col-md-8 col-lg-6">
     
        <h1>Kosloski Vistos</h1>
        <h3>Gerenciador de visto americano.</h3>
        
        {!! Form::open(['route' => 'user.login','method' => 'post']) !!}
            
            <p>Acesse o sistema</p>

            <!--CAMPO E-MAIL -->
            <div class="form-group">
                <label for='email'>
                    {!!Form::text('email', null, ['class' => 'input', 'placeholder' =>'Usuário']) !!}
                </label>
            </div>

            <!--CAMPO SENHA -->
            <div class="form-group">
                <label for="password">
                    {!! Form::password('password', ['placeholder' => 'Senha']) !!}
               </label>
            </div>
            
            <div class="form-group">
            <label>
            {!! Form:: submit('Entrar') !!}
            </label>

        {!! Form::close() !!}
    </section>

    </body>    
</html>
