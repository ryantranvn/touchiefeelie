@if ($controller == 'home')
<div class="nav-container" data-spy="affix" data-offset-top="69">
@else
<div class="nav-container" data-spy="affix" data-offset-top="0">
@endif
    <nav class="navbar navbar-toggleable-s">
        <div class="menu-button">
            <button class="hamburger" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <span class="text-menu h-o-m">MENU</span>
        </div>
        @if (count($navItem) > 0)
        <div class="submenu-button h-o-m">
            {{-- <a href="{{ url('/'.$navItem['url']) }}"> --}}
                <span class="text-menu"><i class="fas fa-angle-right"></i> &nbsp; {{ $navItem['text'] }}</span>
            {{-- </a> --}}
        </div>
        @endif
        <a class="navbar-brand" href="{{ url('/') }}">
            <div class="logo"></div>
        </a>
        <div class="btn-booking"><a href="{{ url('/dat-hen') }}">TƯ VẤN NGAY</a></div>
    </nav>
    @if ($hasSubnav) 
        @include('web.partials.sub_nav')
    @endif
</div>

@include('web.partials.navbar_collapse')
