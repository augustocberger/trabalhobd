<li class="nav-item {{ Request::is('bens*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('bens.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Bens</span>
    </a>
</li>
<li class="nav-item {{ Request::is('fornecedores*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('fornecedores.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Fornecedores</span>
    </a>
</li>
<li class="nav-item {{ Request::is('moradores*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('moradores.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Moradores</span>
    </a>
</li>
<li class="nav-item {{ Request::is('pecas*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('pecas.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Pecas</span>
    </a>
</li>
<li class="nav-item {{ Request::is('torres*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('torres.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Torres</span>
    </a>
</li>
<li class="nav-item {{ Request::is('bensMoradors*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('bensMoradors.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Bens Moradors</span>
    </a>
</li>
