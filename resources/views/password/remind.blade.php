@extends('layouts.blank')
@section('head')
    <title>{{ trans('messages.title') }} - Login</title>
    {!! HTML::style('css/login.css') !!}
    <meta charset="utf-8">
@stop

@section('content')
    @if (Session::has('error'))
        {{ trans(Session::get('reason')) }}
    @elseif (Session::has('success'))
        O email com a confirmação do reset foi enviado com sucesso.
    @endif

    <div class="main">
        <div class="login-form">
            <h1>{{ trans('messages.title') }}</h1>

            <div class="head">
                {!! HTML::image('images/user.png') !!}
            </div>

            {!! Form::open(array('route' => 'password.request')) !!}
            <div>
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email') !!}
            </div>
            <div>
                {!! Form::submit('Enviar') !!}
            </div>
            {!! Form::close() !!}

        </div>
    </div>

@stop