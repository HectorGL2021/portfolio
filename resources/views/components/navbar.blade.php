@props(['class' => ''])

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="logo" href="{{ route('home') }}">
            <span>HG</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="fas fa-home me-1"></i> Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        <i class="fas fa-user me-1"></i> Sobre Mí
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('experience') ? 'active' : '' }}" href="{{ route('experience') }}">
                        <i class="fas fa-briefcase me-1"></i> Experiencia
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('skills') ? 'active' : '' }}" href="{{ route('skills') }}">
                        <i class="fas fa-code me-1"></i> Habilidades
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                        <i class="fas fa-envelope me-1"></i> Contacto
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav> 