@extends('layouts.blank')
@section('head')
    <title>{{ trans('messages.title') }} - Login</title>
    {!! HTML::style('css/login.css') !!}
    <meta charset="utf-8">
    @stop

    @section('content')
            <!-----start-main---->
    <div class="main">
        <div class="login-form">
            <h1>{{ trans('messages.title') }}</h1>

            <div class="head">
                {!! HTML::image('images/user.png') !!}
            </div>
            <form method="POST" action="/auth/register">
                {!! csrf_field() !!}
                <div>
                    Name
                    <input type="text" name="name" value="{{ old('name') }}">
                </div>

                <div>
                    Email
                    <input type="text" name="email" value="{{ old('email') }}">
                </div>

                <div>
                    Password
                    <input type="password" name="password">
                </div>

                <div>
                    Confirm Password
                    <input type="password" name="password_confirmation">
                </div>

                <div class="submit">
                    <input type="submit"  value="REGISTRAR" >
                </div>
            </form>
        </div>
        <!--//End-login-form-->
        <!-----start-copyright---->
        <div class="copy-right">
            <p>Desenvolvido por <a href="http://www.techfullit.com.br">TechFullIT</a></p>
        </div>
        <!-----//end-copyright---->
    </div>
    <!-----//end-main---->
@stop