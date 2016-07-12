<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>User</title>
    <!-- Incluye  estilos -->
    @include('includes/main/estilos')
    @include('includes/admin/estilos')

    @yield('head')

</head>
<body>

<!-- Incluye menú user -->
@include('includes/user/menu');

<!-- Contenido User -->
<div class="container">
    @yield('content')
</div>
<!-- Fin Contenido User -->

<!-- Scripts main -->
@include('includes/main/scripts')
<!-- Scripts user -->
@include('includes/user/scripts')

<!-- Footer -->
@yield('footer')

</body>
</html>