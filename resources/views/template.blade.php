<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Kosloski Vistos @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Material Icons -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!--Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR|Nunito|Satisfy&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="<?php echo asset('css/template.css')?>" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/style.app.css') }}" rel="stylesheet">
    @yield('css')
    
</head>

<body>
    <div class="d-flex">
        <div id="sidebar">
            <div class="shadow-sm d-flex align-items-center flex-column" id="module-info">
                <i class="fas fa-user fa-2x"></i>
                <h1>{{Auth::User()->name}}</h1>
            </div>
            <nav class="nav flex-column">

                <ul class="nav-link d-flex align-items-left flex-column" id="lista-menu" href="#">

                    <li><i class="far fa-envelope" style="color:white"></i><a href='#'>Caixa de entrada</a></li>

                    <li><i class="fab fa-wpforms" style="color:white"></i><a href='#'>DS's</a></li>
                   
                    <li><i class="fas fa-user-friends" style="color:white"></i><a href='#'>Clientes</a></li>
                
                    <li><i class="far fa-calendar-alt" style="color:white"></i><a href='#'>Agendamentos</a></li>
                    <li><i class="fas fa-chart-line" style="color:white"></i><a href='#'>Relatórios</a></li>
                    <li><i class="fas fa-cog" style="color:white"></i><a href='#'>Configurações</a></li>
                            
                </ul>

            </nav>
        </div>
        <div class="d-flex flex-column" id="workspace">
            <div class="shadow-sm d-flex align-items-center justify-content-between" id="header">
                <div class="d-flex align-items-center">
                    <i class="material-icons mr-2 btn-circle" onclick="toggleMenu()">menu</i>
                    <span>Menu</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="material-icons mr-2 btn-circle">apps</i>
                    <i class="material-icons btn-circle">person</i>
                </div>
            </div>
            <div id="content">
                @if(Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get("success")}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if(Session::get('warning'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{Session::get('warning')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if(Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{Session::get('error')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @yield('content')
            </div>
            <div class="d-flex align-items-center" id="footer">
                Desenvolvido por Denise Lopes &copy
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!-- Toggle Menu Script -->
    <script>
        function toggleMenu() {
            var sidebar = document.getElementById('sidebar');
            var workspace = document.getElementById('workspace');
            var header = document.getElementById('header');

            var displaySidebar = sidebar.style.display === "none" ? "block" : "none";
            var marginLeftWorkspace = workspace.style.marginLeft === "0px" ? "210px" : "0px";
            var widthHeader = header.style.width === "100%" ? "calc(100% - 210px)" : "100%";

            sidebar.style.display = displaySidebar;
            workspace.style.marginLeft = marginLeftWorkspace;
            header.style.width = widthHeader;
        }
    </script>
    @yield('js')
</body>

</html>