<!DOCTYPE html>
<html>

<head>
    <title>Laravel Task List</title>
</head>

<body>
    <h1>@yield('title')</h1>
    @yield('styles')
    <div>
        @if (session()->has('success'))
            <div>{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</body>

</html>
