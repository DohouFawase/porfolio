<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Home Page</title>
    @include('components.web.heade')

</head>
<body>
    @include('components.web.nav')

    @yield('content')


   
    @include('components.web.scripts')
    
</body>
</html>