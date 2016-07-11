<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Innenhaus</title>

    <!-- CSS Main -->
    @include('includes/main/estilos')
    @yield('head')
</head>
<body>

<div id="wrapper">
    <div id="header">
        <!-- Menú Main -->
        @include('includes/main/menu')
    </div><!-- #header -->
    
    <div id="content">
        <!-- Contenido Main -->
        <div class="container">
            @yield('content')
        </div>
        <!-- Fin Contenido Main -->
    </div><!-- #content -->
    
    <div id="footer">
        <!-- Footer -->
        @include('includes/main/footer')
        <!-- Footer -->
    </div><!-- #footer -->
</div><!-- #wrapper -->

<!-- Scripts main -->
@include('includes/main/scripts')
@yield('footer')    

</body>
</html>
