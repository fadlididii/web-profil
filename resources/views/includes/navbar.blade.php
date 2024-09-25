<header>
    <div class="header-area header-transparent">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo/fadlii.png') }}" alt=""></a>
                    </div>
                    <div class="main-menu f-right d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/about') }}">About</a></li>
                                <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                                <li><a>Blog</a>
                                    <ul class="submenu">
                                        <li><a href="{{ url('/f1') }}">F1 Team 23</a></li>
                                        <li><a href="{{ url('/cat') }}">My Cats</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/admin') }}">Admin</a></li>
                                <li><a href="{{ url('/login') }}">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
