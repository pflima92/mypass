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
            <h1>Member Login</h1>
            <div class="head">
                {!! HTML::image('images/user.png') !!}
            </div>
            <form>
                <label>Usuário</label>
                <input type="text" class="text" value="" >
                <label>Senha</label>
                <input type="password" value="">
                <div class="submit">
                    <input type="submit" onclick="myFunction()" value="LOGIN" >
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