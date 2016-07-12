<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Menú User</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><b>ACERCA</b></a></li>
                <li><a href="#"><b>NOSOTROS</b></a></li>
                <li><a href="#"><b>PROYECTOS</b></a></li>
                <li><a href="#"><b>REGALA UN PAQUETE</b></a></li>
                <li><a href="#"><b>MI LISTA</b></a></li>
                
                @if(!Auth::check())
                    <li><a href="{{ route('auth.login') }}"><b>ACCEDER</b></a></li>
                    <li><a href="{{ route('auth.register') }}"><b>REGISTRARSE</a></b></li>
                @else
                    <li><a href="#"><b>{{ strtoupper( Auth::user()->first_name) }}</b></a></li>
                    <li><a href="{{ route('authenticated.logout') }}"><b>SALIR</b> </a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>