<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">     

    <title>{{ config('app.name') }} - Dashboard</title>
    @livewireStyles
</head>
<body>
    <livewire:employer-dashboard.header />
    <livewire:employer-dashboard.activities-section/>
    <livewire:employer-dashboard.horizontal-card-slider/>
    <x-footer/>

    <script src="{{ mix('js/app.js') }}"></script>
    @livewireScripts
</html>
