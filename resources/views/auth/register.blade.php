@extends('layouts.main')

@section('head')
    {!! HTML::style('css/register.css') !!}
    {!! HTML::style('css/parsley.css') !!}
@stop

@section('content')

<div class="row">
    <div class="col s6 offset-s3">

        {!! Form::open(['url' => route('auth.register-post'), 'class' => 'form-signin_', 'data-parsley-validate' ] ) !!}

        @include('includes.errors')
        <div class="form-signin">
            <h1>
                Diseña tu espacio soñado con nuestro equipo de interioristas profesionales en 4 sencillos pasos
            </h1>
            <h2>
                Hand-picked professional interior designers.
                Room designs start at just $299.
            </h2>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('first_name', null, [
                    'class'                         => '',
                    'required',
                    'id'                            => 'inputFirstName',
                    'data-parsley-required-message' => 'El nombre es requerido',
                    'data-parsley-trigger'          => 'change focusout',
                    'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
                    'data-parsley-minlength'        => '2',
                    'data-parsley-maxlength'        => '32'
                ]) !!}
                <label for="inputFirstName">Nombre</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::text('last_name', null, [
                    'class'                         => '',
                    'required',
                    'id'                            => 'inputLastName',
                    'data-parsley-required-message' => 'El apellido es requerido',
                    'data-parsley-trigger'          => 'change focusout',
                    'data-parsley-pattern'          => '/^[a-zA-Z]*$/',
                    'data-parsley-minlength'        => '2',
                    'data-parsley-maxlength'        => '32'
                ]) !!}
                <label for="inputLastName">Apellido</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::email('email', null, [
                    'class'                         => '',
                    'required',
                    'id'                            => 'inputEmail',
                    'data-parsley-required-message' => 'El email es requerido',
                    'data-parsley-trigger'          => 'change focusout',
                    'data-parsley-type'             => 'email'
                ]) !!}
                <label for="inputEmail">Email</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::input('tel', 'tel', null, [
                    'class'                         => '',
                    'required',
                    'id'                            => 'inputTel',
                    'data-parsley-required-message' => 'El teléfono es requerido',
                    'data-parsley-trigger'          => 'change focusout',
                    'data-parsley-type'             => 'number'
                ]) !!}
                <label for="inputTel">Tel.</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::password('password', [
                    'class'                         => '',
                    'required',
                    'id'                            => 'inputPassword',
                    'data-parsley-required-message' => 'La Contraseña es requerido',
                    'data-parsley-trigger'          => 'change focusout',
                    'data-parsley-minlength'        => '6',
                    'data-parsley-maxlength'        => '20'
                ]) !!}
                <label for="inputPassword">Contraseña</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::password('password_confirmation', [
                    'class'                         => '',
                    'required',
                    'id'                            => 'inputPasswordConfirm',
                    'data-parsley-required-message' => 'La confirmación de la contraseña es requerida',
                    'data-parsley-trigger'          => 'change focusout',
                    'data-parsley-equalto'          => '#inputPassword',
                    'data-parsley-equalto-message'  => 'Las contraseñas no son iguales',
                ]) !!}
                <label for="inputPasswordConfirm">Confirme contraseña</label>
            </div>
        </div>


      <input type="checkbox" class="filled-in" id="remember" name="remember" />
      <label for="remember">Acepto terminos y condiciones</label>

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
    </div>
</div>

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