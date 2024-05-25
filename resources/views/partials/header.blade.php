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

            @if (Auth::check())
            <a href="" class="btn-login" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @else
            <a href="{{ route('register') }}" class="btn-register">Daftar</a>
            <a href="{{ route('login') }}" class="btn-login">Masuk</a>
            @endif
        </div>
    </nav>
</header>
