<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('layouts.partials.styles')


</head>
<body>
    
    <header>
        @include('layouts.partials.menu')
    </header>

    <main class="container mt-4">
        <div class="row">
        
        @yield('content')
        
        </div>
    </main>

    <footer class="bg-light text-center text-lg-start">
        @include('layouts.partials.footer')
    </footer>
    @include('layouts.partials.scripts')
</body>
</html>