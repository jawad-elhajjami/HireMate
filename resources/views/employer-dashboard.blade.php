<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">     

    <title>{{ config('app.name') }} - Dashboard</title>
</head>
<body>
    <x-employer-dashboard.header showLinks="true"/>
    <x-employer-dashboard.main-section1/>
    <x-footer/>

    <script src="{{ mix('js/app.js') }}"></script>
</html>
