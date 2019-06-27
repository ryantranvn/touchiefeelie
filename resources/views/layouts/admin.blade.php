<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache, no-store" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="icon" type="image/png" href="{{ asset('/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('/favicon-96x96.png') }}" sizes="96x96">

    <meta name="description" content="{{ PAGE_NAME }}" />
    <meta name="keywords" content="{{ PAGE_NAME }}" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ PAGE_NAME }}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
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
<body class="theme-{{ THEME_COLOR }} ls-closed">
    @include('admin.partials.page_loader')
    @include('admin.partials.search_bar')
    @include('admin.partials.top_bar')
    @include('admin.partials.left_sidebar')
    @yield('content')
    @include('admin.partials.js_source')
</body>
</html>