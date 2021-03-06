<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    
    <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Admin</title>
    <!-- Incluye  estilos -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @include('includes/admin/estilos')
    @yield('head')
</head>
<body>

<!-- Menú Admin -->
@include('includes/admin/menu')

<!-- Contenido Admin -->
<div class="container">
    @yield('content')
</div>
<!-- Fin Contenido Admin -->

<!-- Scripts main -->
@include('includes/main/scripts')
<!-- Scripts admin -->
@include('includes/admin/scripts')

<!-- Footer -->
@yield('footer')

</body>
</html>