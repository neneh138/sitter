<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:300,400,500,600,700,800,900" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('css/app.min.css')}}">
    <title>{{config('app.name', 'Sitters')}}</title>
</head>
<body>

    @include('homepage\navbar')

    @yield('content')






<script></script>




</body>
</html>
