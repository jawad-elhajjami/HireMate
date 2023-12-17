<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>{{ config('app.name') }} - Create account | Employer</title>
</head>
<body>
    <x-header showLinks="true"/>
    <div class="container mx-auto mt-10 mb-10 flex justify-center flex-col items-center p-4">
        @livewire('employer-get-started')
    </div>
    
    @livewireScripts
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
