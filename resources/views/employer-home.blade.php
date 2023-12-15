<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">     
    <link rel="stylesheet" href="{{ asset('/css/employer-home.css') }}">

    <title>{{ config('app.name') }} - Home page</title>
</head>
<body>
    <x-employer-home.header showLinks="true"/>
    <x-employer-home.search-section />
    <x-employer-home.main-nav />
    <x-employer-home.offers-section />
    <x-employer-home.search-filters />
    <x-footer/>

    <script src="{{ mix('js/app.js') }}"></script>
</html>
