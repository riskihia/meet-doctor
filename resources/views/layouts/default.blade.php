<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.frontsite.meta')
        
        <title>@yield('title') | MeetDoctor</title>

        @stack('before-style')
            {{-- @include('includes.frontsite.style') --}}

            <!-- Scripts -->
            @vite('resources/css/app.css')
        @stack('after-style')
    </head>
    <body>
        @include('components.frontsite.header')
            @yield('content')
        @include('components.frontsite.footer')

        @stack('before-script')
            @include('includes.frontsite.script')

            {{-- script --}}
            @vite('resources/js/app.js')
        @stack('after-script')
    </body>
</html>