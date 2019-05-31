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
        <style>
    
    @import url('https://fonts.googleapis.com/css?family=Volkhov&display=swap');

span{
    color:#0d0d0d;
    font-weight: bold;
}

        #sidebar {
            background: #232323;
            position: fixed;
            min-width: 210px;
            min-height: 100vh;
            box-shadow: 3px 4px #7B7676;
            border-radius: 8px;
            opacity:0.9;
            -moz-opacity:0.9;
            -webkit-opacity:0.9;
        }

        #sidebar a {
            color: #cfd8dc
        }

        #sidebar a:hover {
            background: #29353d
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
      
      

        #lista-menu li  {
            font-size:15px;
            padding: 12px;
            margin: 5px 2px;
            font-family: 'Volkhov', serif;
           box-shadow: 1px 2px 2px black;
            border-radius: 5px;
            
        }

        #lista-menu li:hover{
            background-color: #777575;
            
        }

        #lista-menu li a:hover{
            color: black;
            background-color:#777575;
            text-decoration: none;
        }
        #lista-menu li a{
            color:white;
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
  