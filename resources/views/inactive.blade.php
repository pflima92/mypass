@extends('layouts.blank')
@section('head')
    <title>{{ trans('messages.title') }} - Login</title>
    {!! HTML::style('css/login.css') !!}
    <META CHARSET="UTF-8">
    @stop

    @section('content')
            <!-----start-main---->
    <div class="main">
        <div class="login-form">
            <h1>{{ trans('messages.title') }}</h1>

            <div class="head">
                {!! HTML::image('images/user.png') !!}
            </div>
            <br/>
            <br/>
            <br/>
            <div align="center">
                Sua conta foi desabilitada com sucesso.
            </div>
            <br/>
            <div align="center">

                <a href="{{URL::to('auth\login')}}">Efetuar Login</a>

                <br/><br/>

                <a href="{{URL::to('auth\register')}}">Cadastrar nova conta</a> - <a href="password\reset">Esqueci minha
                    senha</a>
            </div>
            <br/>
            <br/>


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
