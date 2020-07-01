<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('inicio') }}"><i class="la la-home nav-icon"></i> Início</a></li>


<li class="nav-title">Administração</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-newspaper-o"></i> Acesso</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('usuarios') }}"><i class="nav-icon la la-user"></i> <span>Usuários</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-group"></i> <span>Grupos</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissões</span></a></li>

    </ul>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-newspaper-o"></i> Tabelas</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('estados') }}'><i class='nav-icon la la-globe-americas'></i> Estados</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('municipios') }}'><i class='nav-icon la la-flag'></i> Municípios</a></li>
    </ul>
</li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('usuarios') }}'><i class='nav-icon la la-question'></i> Usuarios</a></li>