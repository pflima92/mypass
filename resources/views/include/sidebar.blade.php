<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
            <li> {{-- class="active" --}}
            <a href="{{URL::to('/home')}}"><i class="fa fa-fw fa-dashboard"></i> Início</a>
        </li>
        <li>
            <a href="{{URL::to('/profile')}}"><i class="fa fa-fw fa-user"></i>Perfil</a>
        </li>
    </ul>
</div>