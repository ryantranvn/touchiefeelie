<!-- Top Bar -->
<nav class="navbar bg-{{ THEME_COLOR }}">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="true"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand logo" href="{{ url('/admin') }}"></a>
        </div>
        <div class="collapse navbar-collapse language-switch" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="btn viewFrontend" href="{{ url('/') }}" target="_blank" style="margin-top: 24px; box-shadow: none; line-height: 24px;">
                        <i class="material-icons">home</i> Trang chủ
                    </a>
                </li>
                <li>
                    <a class="btn viewFrontend" href="{{ url('/logout') }}" style="margin-top: 24px; box-shadow: none; line-height: 24px;">
                        <i class="material-icons">exit_to_app</i> Thoát 
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->