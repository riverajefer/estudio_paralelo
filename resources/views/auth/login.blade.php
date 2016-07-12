@extends('layouts.main')

@section('head')
    {!! HTML::style('css/signin.css') !!}
    {!! HTML::style('css/parsley.css') !!}
@stop

@section('content')

        {!! Form::open(['url' => route('auth.login-post'), 'class' => 'form-signin', 'data-parsley-validate' ] ) !!}


        @include('includes.status')

        <h2 class="form-signin-heading">Acceder</h2>

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

        <label for="inputPassword" class="sr-only">Password</label>
        {!! Form::password('password', [
            'class'                         => 'form-control',
            'placeholder'                   => 'Contraseña',
            'required',
            'id'                            => 'inputPassword',
            'data-parsley-required-message' => 'La contraseña es requerida',
            'data-parsley-trigger'          => 'change focusout',
            'data-parsley-minlength'        => '6',
            'data-parsley-maxlength'        => '20'
        ]) !!}

        <div class="checkbox">
            <label>
                {!! Form::checkbox('remember', 1) !!} Recordarme
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block login-btn" type="submit">
            Ingresar
        </button>
        <p><a href="{{ route('auth.password') }}">Olvide mi contraseña</a></p>

        <p class="or-social">Ó</p>

        <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}" class="btn btn-lg btn-primary btn-block facebook" type="submit">Ingresar con Facebook</a>

        <a href="{{ route('auth.register') }}" class="enlace_rl">
            <p>REGISTRARME</p>
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

@stop