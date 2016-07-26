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
            <a class="navbar-brand" href="{{ route('public.home')  }}">
                <img src="{{asset('img/logos/logo.png')}}" style="max-width:150px; margin-top: -7px;" alt="Logo">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">ACERCA</a></li>
                <li><a href="#">NOSOTROS</a></li>
                <li><a href="#">PROYECTOS</a></li>
                <li><a href="#">REGALA UN PAQUETE</a></li>
                <li><a href="#">MI LISTA</a></li>
                
                @if(!Auth::check())
                    <li><a href="{{ route('auth.login') }}">ACCEDER</a></li>
                    <li><a href="{{ route('auth.register') }}">REGISTRARSE</a></li>
                @else
                    <li><a href="#">{{ strtoupper(Auth::user()->first_name) }}</a></li>
                    <li><a href="{{ route('authenticated.logout') }}">SALIR </a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>