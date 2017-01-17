<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Designer</title>
    <!-- Incluye  estilos -->
    @include('includes/designer/estilos')
    @yield('head')
</head>
<body>

<!-- Menú Designer -->
@include('includes/designer/menu')

<!-- Contenido Designer -->
<div class="container">
    @yield('content')
</div>
<!-- Fin Contenido Designer -->

<!-- Scripts main -->
@include('includes/main/scripts')
<!-- Scripts Designer -->
@include('includes/designer/scripts')

<!-- Footer -->
@yield('footer')

</body>
</html>