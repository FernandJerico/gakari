<header>
    <img src="{{ asset('images/logo-text-dark.png') }}" alt="logo" class="logo">
    <nav>
        <ul class="nav-links">
            <li class="nav-item {{ Request::is('/', '/*') ? 'active' : '' }}"><a href="/">Landing Page</a></li>
            <li class="nav-item {{ Request::is('eksplorasi', '/eksplorasi*') ? 'active' : '' }}"><a
                    href="{{ route('eksplorasi') }}">Eksplorasi</a></li>
            <li class="nav-item"><a href="#">Tentang Kami</a></li>
        </ul>
        <div class="auth">
            <a href="#" class="btn-register">Daftar</a>
            <a href="#" class="btn-login">Masuk</a>
        </div>
    </nav>
</header>
