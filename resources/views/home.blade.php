<!-- landing page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>{{ config('app.name') }} - Landing page</title>
</head>
<body>
    
    <x-header />
    <x-hero-section />
    <x-why-choose-us-section />
    <x-get-started />
    <x-how-it-works />
    <x-footer />

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>