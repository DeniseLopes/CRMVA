     <!-- Styles -->
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    @yield('css')
    <!--Icon-->

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
                    <li><i class="fas fa-user-friends" style="color:white"></i><a href='/usuarios'>Usuários</a></li>
                
                    <li><i class="far fa-calendar-alt" style="color:white"></i><a href='#'>Agendamentos</a></li>
                    <li><i class="fas fa-chart-line" style="color:white"></i><a href='#'>Relatórios</a></li>
                    <li><i class="fas fa-cog" style="color:white"></i><a href='#'>Configurações</a></li>
                                   

                </ul>
            </nav>
        </div>
        
    
    

