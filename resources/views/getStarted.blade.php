<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Get Started</title>
</head>
<body class="bg-gray-100">
    <x-header /> 
    <div class="container my-16 max-w-3xl mx-auto grid items-center justify-center">
        <h1 class="text-4xl text-center pb-2">Ready to take your career to the next level ?</h1>
        <p class="text-base w-1/2 my-0 mx-auto text-center">Fill out your informations in the form below, it takes only a few moments.</p>
        <div class="bg-white w-[80%] mx-auto rounded-md h-auto p-[40px] border-solid border-2 border-gray-100 mt-8">
            <div class="">
                
                <h2 class="text-[24px] text-[#4DD783] pb-2 font-medium">Create your account</h2>
                <p class="text-[14px] text-[#888]">By creating an account or logging in, you understand and agree to HireMate’s Terms of Service.</p>
                <form method="" action="">
                    <x-forms.input inputType="email" inputName="Email"/>
                    <x-forms.input inputType="text" inputName="Full Name"/>
                    <x-forms.input inputType="text" inputName="Address"/>
                    <x-forms.button></x-forms.button>
                </form>
            </div>
        </div>
    </div>
    <x-footer />
</body>
</html>