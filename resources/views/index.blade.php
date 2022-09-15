<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Isoftbet task 2</title>
</head>
<body>
    <div class="container">
       <div class="mt-5"> <a href="{{route('download-rates')}}" class="btn btn-primary">download exchange rate</a></div>
    </div>
</body>
</html>
