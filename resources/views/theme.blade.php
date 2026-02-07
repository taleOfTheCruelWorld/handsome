<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Magaz</title>
    @push('styles')
    <link rel="stylesheet" href="{{ asset('css/bootstrap-5.3.8-dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}?v={{ time() }}">
    @endpush
    @stack('styles')
</head>

<body>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Some shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"  id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @endguest
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cabinet') }}">{{ Auth::user()->login}}</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        <li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content', default: '')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success">
        <ul>
            @foreach (session('success') as $suc)
                <li>{{ $suc}}</li>
            @endforeach
        </ul>
    </div>
@endif
    <footer>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            </div>
        </nav>
        <div class="container-fluid">
            <p>ООО "Бман"</p>
        </div>
    </footer>
    @push('scripts')
    <script src="{{ asset('css/bootstrap-5.3.8-dist/js/bootstrap.js') }}""></script>
    @endpush
    @stack('scripts')
</body>

</html>
