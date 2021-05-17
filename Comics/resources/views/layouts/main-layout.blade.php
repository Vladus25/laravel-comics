<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-Comics</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- MY CSS -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    @include('components.header')
    <img src="{{ asset('/storage/images/jumbotron.jpg') }}">
    @yield('content')
    @include('components.footer')
</body>
</html>
