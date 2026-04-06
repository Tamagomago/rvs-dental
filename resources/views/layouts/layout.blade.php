@include('layouts.header')

<body>
@auth
    @hasSection('hideNavbar')
    @else
        @include('layouts.navbar')
    @endif
@endauth
<main class="h-content">
    @yield('content')
</main>
</body>
