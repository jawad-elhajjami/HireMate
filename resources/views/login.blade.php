<!-- login page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>{{ config('app.name') }} - Log In</title>
</head>
<body>
    
    <x-header showLinks="false" />
    
    <livewire:login-form />
    @livewireScripts

    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    
</body>
</html>