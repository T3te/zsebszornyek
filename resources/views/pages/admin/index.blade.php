<!doctype html>
<html lang="hu">
<head>
@include('pages.admin.partials._head')
@yield('stylesheets')
</head>
<body class="theme-blue">
@yield('preload')
@include('pages.admin.partials._nav')
<div id="wrapper">
@yield('content')
</div>
@yield('scripts')
</body>
</html>