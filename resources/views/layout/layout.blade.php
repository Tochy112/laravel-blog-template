<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title> Blog | @yield('title')</title>
</head>
<body>
    @include('includes.navbar')
    
    <div class="wrapper">
        @yield('contents')
    </div>
     
</body>
</html>