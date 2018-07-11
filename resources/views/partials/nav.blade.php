<nav class="navbar @if(Route::is('home')) is-transparent @endif">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home') }}">
            <img src="/img/icon.svg" alt="mortehan logo" height="28">
        </a>
        <div class="navbar-burger burger" data-target="MainNav">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="MainNav" class="navbar-menu">
        <div class="navbar-start">

        </div>

        <div class="navbar-end">
            @auth
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="#">
                        {{ auth()->user()->name }}
                    </a>

                    <div class="navbar-dropdown is-right">
                        <hr class="dropdown-divider">
                        <a class="navbar-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @else
                <a class="navbar-item" href="{{ route('login') }}">
                    Login
                </a>
            @endauth
        </div>
    </div>
</nav>
