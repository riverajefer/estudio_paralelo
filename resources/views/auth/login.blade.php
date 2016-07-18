@extends('layouts.main')

@section('head')
    {!! HTML::style('css/signin.css') !!}
    {!! HTML::style('css/parsley.css') !!}
@stop

@section('content')


<div class="row">
    <div class="col s6 offset-s3">

     {!! Form::open(['url' => route('auth.login-post'), 'class' => '', 'data-parsley-validate' ] ) !!}

        

        <h2 class="form-signin-heading">Acceder</h2>

        <div class="row">
            <div class="input-field col s12">
                {!! Form::email('email', null, [
                    'class'                         => 'validate',
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
            {!! Form::password('password', [
                'class'                         => 'validate form-control',
                'required',
                'id'                            => 'inputPassword',
                'data-parsley-required-message' => 'La contraseña es requerida',
                'data-parsley-trigger'          => 'change focusout',
                'data-parsley-minlength'        => '6',
                'data-parsley-maxlength'        => '20'
            ]) !!}
            <label for="inputPassword">Password</label>
        </div>
      </div>

      <input type="checkbox" class="filled-in" id="remember" name="remember" />
      <label for="remember">Recordarme</label>
      @include('includes.status')
      <br><br>
               

        <button class="btn waves-effect waves-light btn-lg btn-primary btn-block login-btn" type="submit">
            Ingresar
        </button>
        <p class="enlace_rpw">
            <a href="{{ route('auth.password') }}" >Olvide mi contraseña</a>
        </p>

        <p class="or-social">Ó</p>

        <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}" class="btn btn-lg btn-primary btn-block facebook" type="submit">Ingresar con Facebook</a>

        <a href="{{ route('auth.register') }}" class="enlace_rl">
            <p>REGISTRARME</p>
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

@stop