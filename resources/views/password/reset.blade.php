@extends('layouts.blank')
@section('head')
    <title>{{ trans('messages.title') }} - Login</title>
    {!! HTML::style('css/login.css') !!}
    <meta charset="utf-8">
    @stop

    @section('content')
        @if (Session::has('error'))
            {{ trans(Session::get('reason')) }}
        @endif

        {{ Form::open(array('route' => array('password.update', $token))) }}

        <p>{{ Form::label('email', 'Email') }}
            {{ Form::text('email') }}</p>

        <p>{{ Form::label('password', 'Password') }}
            {{ Form::text('password') }}</p>

        <p>{{ Form::label('password_confirmation', 'Password confirm') }}
            {{ Form::text('password_confirmation') }}</p>

        {{ Form::hidden('token', $token) }}

        <p>{{ Form::submit('Submit') }}</p>

        {{ Form::close() }}
@stop