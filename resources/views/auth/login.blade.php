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
            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}
                <label>Usuário</label>
                <input type="text" name="email" value="{{ old('email') }}" />
                <label>Senha</label>
                <input type="password" name="password" id="password">
                <div>
                    <input type="hidden" name="remember" value="false" /> {{--TODO Before--}}
                </div>
                <div class="submit">
                    <input type="submit"  value="LOGIN" >
                </div>
                <div>
                    <a   href="{{URL::to('auth\register')}}">Cadastrar nova conta</a>
                    <br/>
                    {{--<a   href="\auth\register">Esqueci minha senha...</a>--}}
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