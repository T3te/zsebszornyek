<!DOCTYPE html>
<html lang="hu">
<head>
    @include('partials._head')
</head>
<body class="fixed-header">
@include('partials._nav')

@include('partials._breadcrumbs')

@yield('content')

@include('partials._footer')
@yield('scripts')
</body>
</html>