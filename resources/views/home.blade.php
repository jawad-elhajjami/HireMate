<!-- landing page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>HireMate</title>
</head>
<body>
<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-3xl">
            <a href="{{url()->current()}}" class="flex items-center">
                <span class="site-logo self-center text-green-400	 text-2xl font-semibold whitespace-nowrap dark:text-white">{{ config('app.name') }}</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-4 lg:px-5 py-1 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a>
                <a href="#" class="text-green-400 outline outline-2 outline-offset-2 bg-transparent hover:bg-dark focus:ring-4 focus:ring-green-200 font-medium rounded-full text-sm px-4 lg:px-5 py-1 lg:py-2.5 mr-2 dark:bg-green-400 dark:hover:bg-green-400 focus:outline-none dark:focus:ring-blue-800">Get started</a>
            </div>
        </div>
    </nav>
</header>
<section class="hero-section bg-[url('/images/hero-image.png')] min-h-screen bg-no-repeat bg-center bg-cover bg-blend-darken px-4 lg:px-6 py-5 flex relative">
    <div class="hero-section-content max-w-screen-md absolute top-40">
        <h1 class="text-5xl text-white mb-5">Find Your Dream Job in a single click</h1>
        <p class="text-white text-xl mb-5">Are you looking for exciting career opportunities? Your Job Portal is here to help you discover the perfect job that matches your skills and interests.</p>
        <a href="" class="text-white text-lg bg-green-400 h-14 rounded-full w-[200px] flex items-center justify-center">Get started</a>
    </div>
</section>
<section>
    test
</section>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>