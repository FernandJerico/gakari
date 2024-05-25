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
            @guest
                <a href="{{ route('register') }}" class="btn-register">Daftar</a>
                <a href="{{ route('login') }}" class="btn-login">Masuk</a>
            @else
                <div class="dropdown">
                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <img src="{{ asset('images/default-profile.png') }}" alt="Default" width="50px">
                    </button>
                    <ul class="dropdown-menu">
                        <div class="profile">
                            <img src="{{ asset('images/default-profile.png') }}" alt="Default" width="50px">
                            <h6>{{ auth()->user()->name }}</h6>
                        </div>
                        <div class="menu mt-2">
                            <a href="#">Profil</a>
                            <a href="#">Unggah Karya</a>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </ul>
                </div>
            @endguest
        </div>
    </nav>
</header>
