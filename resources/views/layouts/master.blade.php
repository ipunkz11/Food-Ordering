<!DOCTYPE html>
<html lang="en">
    
@include('layouts.head')

    <body class="sb-nav-fixed">
        @include('layouts.navbar')

        <div id="layoutSidenav">
            @include('layouts.sidebar')

            <div id="layoutSidenav_content">
                @yield('content')
                
                <footer class="py-4 bg-light mt-auto">
                    @include('layouts.footer')
                </body>
                </html>
