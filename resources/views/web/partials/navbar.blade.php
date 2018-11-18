<nav class="navbar navbar-toggleable-s">
    <div class="menu-button">
        <button class="hamburger hamburger--elastic" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        <span class="text-menu">MENU</span>
    </div>
    <a class="navbar-brand" href="{{ url('/') }}">
        <img class="screen-md" src="{{ asset(WEB.'/images/logo-md.png') }}" ">
        <img class="screen-lg" src="{{ asset(WEB.'/images/logo-lg.png') }}" ">
    </a>
    
    <div class="navbar-collapse">
        <ul class="navbar-nav">
            {{-- <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Projects</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/what-we-do') }}">What We Do</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/about-us') }}">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/m.art.branding/" target="_blank">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Carrier</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li> --}}
        </ul>
    </div>
</nav>

