<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache, no-store" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="shortcut icon" href="{{ asset(WEB.'/images/favicon.ico') }}" />
    <meta name="description" content="M-art" />
    <meta name="keywords" content="M-art" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>M-art</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Styles -->
    @include('admin.partials.css_links')
    <!-- Scripts -->
    <script src="{{ asset('plugins/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/additional-methods.js') }}"></script>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @include('admin.partials.pass_to_js')
</head>
@if ($controller=='home')
    @if ($action=='index')
        @php($controller = 'home')
    @else
        @php($controller = 'error')
    @endif
@endif
<body class="{{ $controller }}-page">
    <header id="header" class="container-fluid">
        @include('admin.partials.header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer id="footer" class="container-fluid">
        @include('admin.partials.footer')
    </footer>
    @include('admin.partials.page_loader')
    <!-- Scripts -->
    @include('admin.partials.js_source')
</body>
</html>