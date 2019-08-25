
@extends('layouts.app')
@section('content')
<!-- fonts-->
<link href='https://fonts.googleapis.com/css?family=Volkhov&display=swap'>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- Styles -->
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    @yield('css')
<!--SIDEBAR-->
<div id="sidebar-wrapper ">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
                Start Bootstrap
            </a>
        </li>
        <li>
            <a href="#">Usuario</a>
        </li>
        <li>
            <a href="#">DS</a>
        </li>
    </ul>
</div>
<!--fim sidebar-->

<!--PAGE CONTENT-->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1>sidebar simples</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores quia incidunt
                     molestias consequatur? Culpa quaerat commodi illo voluptas, eligendi obcaecati totam 
                     voluptatem dignissimos fuga molestiae amet voluptatibus 
                     fugit ullam ex!
                    </p>
                     <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
            </div>
        </div>
    </div>
</div>
<!--fim page content-->

<!--JQuery-->
<script src="js/jquery.js"></script>

<!--Bootstrap Core JavaScript-->
<script src="js/bootstrap.min.js"></script>

<!--Menu Toggle Script-->
<script>
$("#menu-toggle").click(function(e){
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>

<!--CONTAINER PRINCIPAL-->
<div class="container">
    
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                     
                <div class="card-header">Página Inicial</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    <span> Bem vindo, {{Auth::user()->name}}!</span><br>
                    <a href="{{url('/usuario')}}"><button>Novo Usuário</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


  