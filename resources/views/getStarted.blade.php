<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Get Started</title>
    <!--Livewire fullstack framwork Style-->
    @livewireStyles
</head>
<body class="bg-gray-100">
    
    <x-header showLinks="true"/> 
    @livewire('multi-step-form')
    <x-footer />

    <!--Livewire fullstack framwork Script-->
    @livewireScripts
</body>
</html>