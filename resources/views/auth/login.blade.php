@extends('layouts.main')

@section('head')
    {!! HTML::style('css/signin.css') !!}
    {!! HTML::style('css/parsley.css') !!}
@stop

@section('content')


<div class="row">
    <div class="col s6 offset-s3">

     {!! Form::open(['url' => route('auth.login-post'), 'class' => 'acceder', 'data-parsley-validate' ] ) !!}
        
        <h2 class="form-signin-heading">Inicia tu sesión</h2>
        <p class="copi_login">
            Hand-picked professional interior designers. <br>
            Room designs start at just $299.
        </p>

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
            <label for="inputPassword">Contraseña</label>
        </div>
      </div>

      <input type="checkbox" class="filled-in" id="remember" name="remember" />
      <label for="remember">Recordarme</label>
      @include('includes.status')
      <br><br>
               
        <button class="btn btn-lg btn-primary btn-block register-btn" type="submit">
            COMIENZA
        </button>
        <br>
        <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}" class="btn btn-lg btn-primary btn-block facebook" type="submit">
            INICIA SESIÓN CON FACEBOOK
        </a>
        <div class="row elf">
            <div class="col-md-6 bv">
                <a href="{{ route('auth.password') }}" >¿Olvidaste tu contraseña? </a>
            </div>
            <div class="col-md-6">
                 <a href="{{ route('auth.register') }}" class="enlace_rl"> ¿Aún no estas registrado?</a>           
            </div>
        </div>
        {!! Form::close() !!}
        
    </div>
</div>
<br>
<br>
<br>
   
@stop

@section('footer')

    <script type="text/javascript">
        window.ParsleyConfig = {
            errorsWrapper: '<div></div>',
            errorTemplate: '<div class="alert alert-danger parsley" role="alert"></div>'
        };
    </script>
    <script src="{{asset('/assets/plugins/parsley.min.js')}}" defer="defer"></script>

@stop