<!DOCTYPE html>
<html lang="hu">
<head>
    @include('partials._head')
</head>
<body class="fixed-header">
@yield('partials._nav')

@yield('content')

@include('partials._footer')
@yield('scripts')
</body>
</html>