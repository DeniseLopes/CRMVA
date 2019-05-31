
@extends('layouts.app')
@section('content')

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

<style>
    
    @import url('https://fonts.googleapis.com/css?family=Volkhov&display=swap');

span{
    color:#0d0d0d;
    font-weight: bold;
}

        #sidebar {
            background: #303e45;
            position: fixed;
            min-width: 210px;
            min-height: 100vh;
        }

        #sidebar a {
            color: #cfd8dc
        }

       

        #sidebar a.active {
            color: #fff;
            background: #29353d;
        }

        #module-info {
            color: #fff;
            min-height: 64px;
            padding: 10px;

        }

        /*#module-info i { font-size: 36px; }*/
        #module-info h1 {
            max-width: 100px;
            font-size: 18px;
            margin: 0;
            font-family: 'Volkhov', serif;
        }

        #lista-menu {
            font-family: 'Volkhov', serif;
            padding-bottom: 3px;
            font-size: 18px;
            margin-top: 5px;
        }

        ul {
            list-style: none;

        }
        #logo {
            color: #730D0D;
         }
      
        #lista-menu li a {
            font-size:15px;
            padding: 2px;
            margin-left:5px;
            font-family: 'Volkhov', serif;

        }

        #workspace {
            width: 100%;
            margin-left: 210px;
            background: #f3f6f7;
        }

        #header {
            z-index: 99;
            width: calc(100% - 210px);
            background: #fff;
            position: fixed;
            padding: 0 16px;
            height: 64px;
            color: #5f6368;
        }

        #content {
            margin-top: 64px;
            padding: 16px;
            min-height: calc(100vh - 128px);
        }

        #footer {
            color: #5f6368;
            height: 64px;
            padding-left: 16px;
            border-top: 1px solid #cfd8dc;
        }

        .btn-circle {
            border-radius: 50%;
            cursor: pointer;
            padding: 10px;
        }

        .btn-circle:hover {
            background: #ededed;
        }

        nav {
            font-family: 'Nunito', sans-serif;
        }
        


</style>
  