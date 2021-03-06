<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Menú Admin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('public.home')  }}">Home</a></li>
                <li><a href="{{URL::to('admin/paquetes')}}">Paquetes</a></li>
                <li><a href="{{URL::to('admin/espacios')}}">Espacios</a></li>
                <li><a href="{{URL::to('admin/estilos')}}">Estilos</a></li>
                <li><a href="{{URL::to('admin/colors')}}">Colores</a></li>
                <li><a href="{{URL::to('admin/users')}}">Usuarios</a></li>
                <li><a href="{{URL::to('admin/gestion_pedidos')}}">Gestión de Pedidos</a></li>
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><b>{{ strtoupper(Auth::user()->first_name) }}</b></a></li>
                
                <li><a href="{{ route('authenticated.logout') }}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>