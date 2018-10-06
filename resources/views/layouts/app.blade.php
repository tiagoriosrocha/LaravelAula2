<!doctype html>
<html>
    <head>
        @include('include.head')
    </head>
    <body>
        
        @include('include.header')
        
        <br>
        <div class="container">
                @yield('content')
        </div>

        <div class="container-fluid">
            <footer class="row">
                @include('include.footer')
            </footer>
        </div>
    </body>
</html>