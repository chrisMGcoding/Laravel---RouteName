<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{('css/app.css')}}">

</head>
<body>
    @include('partials/navbar')

   @yield('content')

    <script src="{{('js/app.js')}}"></script>
    
</body>
</html>