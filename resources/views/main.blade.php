@include('partials._head')
<body class="fixed-header">
@include('partials._nav')

@include('partials._breadcrumbs')

@yield('content')

@include('partials._footer')
@yield('scripts')
</body>
</html>