<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title - @yield('title')</title>
</head>
<body>
    @section('header')
        <h1>HEADER (master)</h1>
    @show
    <hr>
    <div class="container"> 
        @yield('content')
    </div>
    <hr>
    @section('footer')
        <h1>FOOTER (master)</h1>
    @show
</body>
</html>