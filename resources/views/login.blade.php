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
    
    <div class="container mx-auto flex justify-center">
        <form action="" method="POST" class="lg:min-w-[500px] min-w-[300px] lg:mt-20 p-4">
            @csrf
            <h1 class="text-3xl lg:text-4xl text-left mb-10">Login</h1>
            <x-forms.input inputType="email" inputName="Email address" />
            <x-forms.input inputType="password" inputName="Password" />
            <a href="" class="flex text-right justify-end w-fit mb-4 mt-3 text-green-400 text-md hover:text-gray-800 duration-200">Fogot password ?</a>
            <button type="submit" class="bg-green-400 rounded-full text-white w-full text-center py-3 text-md hover:bg-green-500 duration-200">Log in with email</button>
            <span class="h-px flex w-100 bg-gray-300 mt-10 mb-10"></span>
            <p class="text-md text-center mb-3">Need to create an account sign up as :</p>
            <div class="flex items-center justify-center gap-10">
                <a href="#" class="text-green-400 hover:text-gray-800 duration-200">Job seeker</a>
                <span class="h-4 w-px bg-gray-300"></span>
                <a href="#" class="text-green-400 hover:text-gray-800 duration-200">Employer</a>
            </div>       
        </form>

    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    
</body>
</html>