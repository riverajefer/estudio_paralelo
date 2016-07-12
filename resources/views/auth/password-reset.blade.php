@extends('layouts.main')

@section('head')
    {!! HTML::style('css/reset.css') !!}
@stop

@section('content')

        {!! Form::open(['url' => route('auth.password-post'), 'class' => 'form-signin' ] ) !!}

        @include('includes.status')

        <h2 class="form-signin-heading">Restablecer contraseña</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required', 'autofocus', 'id' => 'inputEmail' ]) !!}

        <br />
        <button class="btn btn-lg btn-primary btn-block reset-btn" type="submit">Envíame un enlace de restablecimiento</button>

        {!! Form::close() !!}

@stop