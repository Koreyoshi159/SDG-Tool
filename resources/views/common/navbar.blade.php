<nav class="navbar is-info  has-text-white">
    <div class="container">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                <img class="logo" src="/image/HZ_logo.png"/>
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a href="/"
                   class="navbar-item {{ Request::path() === '/' ? "is-active" : "" }}">
                    Dashboard
                </a>
                <a href="/blogs"
                   class="navbar-item {{ Request::path() === 'blog' ? "is-active" : "" }}">
                    Blog
                </a>
                <a href="/contact"
                   class="navbar-item {{ Request::path() === 'contact' ? "is-active" : "" }}">
                    Contact
                </a>
                @auth()
                    <a href="/admin"
                       class="navbar-item {{ Request::path() === 'admin' ? "is-active" : "" }}">
                        Admin
                    </a>
                @endauth

            </div>
            <div class="navbar-end">
                @auth()
                    <div class="mt-3 space-y-1">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                                   onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                @else
                    <a href="/login"
                       class="navbar-item {{ Request::path() === 'login' ? "is-active" : "" }}">
                        Login
                    </a>
                    <a href="/register"
                       class="navbar-item {{ Request::path() === 'register' ? "is-active" : "" }}">
                        Register
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>
