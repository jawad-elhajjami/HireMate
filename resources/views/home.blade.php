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
    <header class="bg-white sticky top-0 z-[9999999] w-full">
        <nav class="border-gray-200 px-4 lg:px-6 py-5  container mx-auto">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-3xl">
                <a href="{{url()->current()}}" class="flex items-center">
                    <span class="site-logo self-center text-green-400 text-2xl font-semibold whitespace-nowrap">{{ config('app.name') }}</span>
                </a>
                <div class="flex items-center lg:order-2 gap-x-4">
                    <a href="#" class="text-gray-800 p-2 px-4 hover:bg-gray-200 hover:text-black duration-200 rounded-full">Log in</a>
                    <a href="#" class="text-green-400 py-2 px-4  border border-green-400 hover:bg-green-400 hover:text-white duration-200 rounded-full">Get started</a>
                </div>
            </div> 
        </nav>
    </header>
    <section class="hero-section bg-[url('/images/hero-image.png')] min-h-[80vh] bg-no-repeat bg-center bg-cover bg-blend-darken px-4 lg:px-6 py-5 flex items-center justify-start relative">
        <div class="container mx-auto">
            <div class="hero-section-content max-w-screen-md relative">
                <h1 class="text-5xl text-white mb-5">Find Your Dream Job in a single click</h1>
                <p class="text-white text-xl mb-5">Are you looking for exciting career opportunities? Your Job Portal is here to help you discover the perfect job that matches your skills and interests.</p>
                <a href="" class="text-white text-lg bg-green-400 h-14 rounded-full w-[200px] flex items-center justify-center hover:bg-gray-800 duration-200">Get started</a>
            </div>
        </div>
    </section>
    <section class="py-20 container mx-auto">
        <h1 class="text-4xl text-gray-800 mb-20 font-semibold text-center ">Why choose HireMate</h1>
        <div class="grid grid-cols-1  lg:grid-cols-3 gap-4 lg:gap-12 px-10">
            <div class="relative p-10 my-7 lg:my-0 border border-gray-200 hover:border-green-400 duration-200  rounded-lg">
                <div class="w-12 h-12 rounded-lg bg-green-400 absolute -top-7 left-7 flex items-center justify-center shadow-xl shadow-green-400/70">
                <img src="icons/globe_light.svg" alt="" srcset="">
                </div>
                <h1 class="text-3xl font-semibold py-2 sm:text-xl">Wide Range of opportunities</h1>
                <p>Explore a diverse range of job listings from various industries.</p>
            </div>
            <div class="relative p-10 my-7 lg:my-0 border border-gray-200 hover:border-green-400 duration-200  rounded-lg">
                <div class="w-12 h-12 rounded-lg bg-green-400 absolute -top-7 left-7 flex items-center justify-center shadow-xl shadow-green-400/70">
                <img src="icons/Filter_big.svg" alt="" srcset="">
                </div>
                <h1 class="text-3xl font-semibold py-2 sm:text-xl">Personalized Recommendations</h1>
                <p>Receive tailored job recommendations based on your preferences and interests.</p>
            </div>
            <div class="relative p-10 my-7 lg:my-0 border border-gray-200 hover:border-green-400 duration-200  rounded-lg">
                <div class="w-12 h-12 rounded-lg bg-green-400 absolute -top-7 left-7 flex items-center justify-center shadow-xl shadow-green-400/70">
                    <img src="icons/user_icon.svg" alt="" srcset="">
                </div>
                <h1 class="text-3xl font-semibold py-2 sm:text-xl">User-Friendly Platform</h1>
                <p>Our intuitive platform makes it easy to search, save, and apply for jobs.</p>
            </div>

        </div>
    </section>

    <section class="bg-gray-100 p-20 flex items-center justify-center min-h-[40vh]">
        <div class="flex flex-col justify-center items-center ">
            <h1 class="text-4xl text-gray-800 mb-10 text-center">Get Started Today</h1>
            <p class="mb-10 text-gray-600 w-96 text-center">Join thousands of users who have already found success through Your Job Portal. Sign up now to unlock a world of career possibilities.</p>
            <a href="" class="flex items-center justify-center bg-green-400 px-8 py-3 rounded-full text-white hover:bg-gray-800 duration-200">Get started</a>
        </div>
        
    </section>


    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>