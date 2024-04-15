<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <style>
            header {
                font-size: 24px;
                color: white;
                background-color: purple;
            }
            .container {
                background-color: orange;
            }
            img {
                width: 200px;
                height: auto;
            }
        </style>
    </head>
    <body>
        <header>
            <p>F1 driver database</p>
        </header>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
