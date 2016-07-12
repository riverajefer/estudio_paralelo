@extends('layouts.main')

@section('head')
    {!! HTML::style('css/register.css') !!}
    {!! HTML::style('css/parsley.css') !!}
@stop

@section('content')

        {!! Form::open(['url' => route('auth.register-post'), 'class' => 'form-signin', 'data-parsley-validate' ] ) !!}

        @include('includes.errors')

        <h1>
            Diseña tu espacio soñado con nuestro equipo de interioristas profesionales en 4 sencillos pasos
        </h1>
        <h2>
            Hand-picked professional interior designers.
            Room designs start at just $299.
        </h2>

        <label for="inputFirstName" class="sr-only">Nombre</label>
        {!! Form::text('first_name', null, [
            'class'                         => 'form-control',
            'placeholder'                   => 'Nombre',
            'required',
            'id'                            => 'inputFirstName',
            'data-parsley-required-message' => 'El nombre es requerido',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
            'data-parsley-minlength'        => '2',
            'data-parsley-maxlength'        => '32'
        ]) !!}

        <label for="inputLastName" class="sr-only">Apellido</label>
        {!! Form::text('last_name', null, [
            'class'                         => 'form-control',
            'placeholder'                   => 'Apellido',
            'required',
            'id'                            => 'inputLastName',
            'data-parsley-required-message' => 'El apellido es requerido',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
            'data-parsley-minlength'        => '2',
            'data-parsley-maxlength'        => '32'
        ]) !!}

        <label for="inputEmail" class="sr-only">Email</label>
        {!! Form::email('email', null, [
            'class'                         => 'form-control',
            'placeholder'                   => 'Email',
            'required',
            'id'                            => 'inputEmail',
            'data-parsley-required-message' => 'El email es requerido',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-type'             => 'email'
        ]) !!}

        <label for="inputTel" class="sr-only">Tel.</label>
        {!! Form::input('tel', 'tel', null, [
            'class'                         => 'form-control',
            'placeholder'                   => 'Teléfono',
            'required',
            'id'                            => 'inputTel',
            'data-parsley-required-message' => 'El teléfono es requerido',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-type'             => 'number'
        ]) !!}

        <label for="inputPassword" class="sr-only">Contraseña</label>
        {!! Form::password('password', [
            'class'                         => 'form-control',
            'placeholder'                   => 'Contraseña',
            'required',
            'id'                            => 'inputPassword',
            'data-parsley-required-message' => 'La Contraseña es requerido',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-minlength'        => '6',
            'data-parsley-maxlength'        => '20'
        ]) !!}

        <label for="inputPasswordConfirm" class="sr-only has-warning">Confirme contraseña</label>
        {!! Form::password('password_confirmation', [
            'class'                         => 'form-control',
            'placeholder'                   => 'Confirme la contraseña',
            'required',
            'id'                            => 'inputPasswordConfirm',
            'data-parsley-required-message' => 'La confirmación de la contraseña es requerida',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-equalto'          => '#inputPassword',
            'data-parsley-equalto-message'  => 'Las contraseñas no son iguales',
        ]) !!}

        <div class="checkbox">
            <label>
                {!! Form::checkbox('terminos', 1) !!} Acepto terminos y condiciones
            </label>
        </div>      

        <div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>
        <hr>

        <button class="btn btn-lg btn-primary btn-block register-btn" type="submit">
        Continua
        </button>

        <p class="or-social"> ó </p>

        <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}" class="btn btn-lg btn-primary btn-block facebook" type="submit">
        Inicia sesión con Facebook
        </a>

        <a href="{{ route('auth.login') }}" class="enlace_rl">
            <p>YA ESTOY REGISTRADO</p>
        </a>

        {!! Form::close() !!}
@stop

@section('footer')

    <script type="text/javascript">
        window.ParsleyConfig = {
            errorsWrapper: '<div></div>',
            errorTemplate: '<div class="alert alert-danger parsley" role="alert"></div>'
        };
    </script>
    {!! HTML::script('/assets/plugins/parsley.min.js') !!}
    <script src='https://www.google.com/recaptcha/api.js'></script>

@stop