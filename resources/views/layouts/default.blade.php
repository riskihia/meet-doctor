<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.frontsite.meta')
        
        <title>@yield('title') | MeetDoctor</title>

        {{-- @stack('before-style')
            @include('includes.frontsite.style')
        @stack('after-style') --}}
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('components.frontsite.header')
            @yield('content')
        @include('components.frontsite.footer')

        @stack('before-script')
            @include('includes.frontsite.script')
        @stack('after-script')
    </body>
</html>