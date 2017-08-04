<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Blog">
        <meta name="author" content="Kalnynsh">
        <link rel="icon" href="../../favicon.ico">

        <title>Blog</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" 
              integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" 
              crossorigin="anonymous">
        
        <!-- Custom styles for this template -->
        <link href="/css/blog.css" rel="stylesheet">
        
    </head>

    <body>        

        @include ('layouts.nav') 
        
        @include ('layouts.header') 
        
        <div class="container">
            
           <div class="row">
                
                @yield('content')

                @include('layouts.sidebar')

            </div>
        
        </div>
                
        @include('layouts.footer')
        
        @include('layouts.scripts')

    </body>
</html>
