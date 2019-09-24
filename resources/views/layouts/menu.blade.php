<li class="nav-item {{ Request::is('usuarios*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('usuarios.index') !!}">
        <i class="fa fa-users"></i>
        <span>Usuários</span>
    </a>
</li>
