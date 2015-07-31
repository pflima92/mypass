 <!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Menu principal</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{URL::to('/auth/register')}}">{{ trans('messages.title') }}</a>
</div>
<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  {{ Auth::user()->name }} <b
                    class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="{{URL::to('/profile')}}"><i class="fa fa-fw fa-user"></i>Perfil</a>
            </li>
            <li>
                <a href="{{URL::to('/home')}}"><i class="fa fa-fw fa-lock"></i>Senhas</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="{{URL::to('auth\logout')}}"><i class="fa fa-fw fa-power-off"></i>Sair</a>
            </li>
        </ul>
    </li>
</ul>