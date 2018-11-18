<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache, no-store" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="shortcut icon" href="{{ asset(WEB.'/images/favicon.ico') }}" />
    <meta name="description" content="{{ PAGE_NAME }}" />
    <meta name="keywords" content="{{ PAGE_NAME }}" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ PAGE_NAME }}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Styles -->
    @include('web.partials.css_links')
    <!-- Scripts -->
    <script src="{{ asset('plugins/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap3/js/bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/additional-methods.js') }}"></script>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @include('web.partials.pass_to_js')
</head>
@if ($controller=='home')
    @if ($action=='index')
        @php($controller = 'home')
    @else
        @php($controller = 'error')
    @endif
@endif
<body class="{{ $controller }}-page">
    @include('web.partials.top')
    @include('web.partials.navbar')
    <main>
        @yield('content')
    </main>
    <footer id="footer">
        @include('web.partials.footer')
    </footer>
    @include('web.partials.page_loader')
    <!-- Scripts -->
    @include('web.partials.js_source')
</body>
</html>
