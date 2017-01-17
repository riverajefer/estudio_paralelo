<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin</title>
    <!-- Incluye  estilos -->
    @yield('head')
    @include('includes/main/estilos')
    @include('includes/admin/estilos')
    <!-- Scripts main -->
    @include('includes/main/scripts')
    <!-- Scripts admin -->
    @include('includes/admin/scripts')


</head>
<body>

<!-- Menú Admin -->
@include('includes/admin/menu')

<!-- Contenido Admin -->
<div class="container">
    @yield('content')
</div>
<!-- Fin Contenido Admin -->


<!-- Footer -->
@yield('footer')

</body>
</html>