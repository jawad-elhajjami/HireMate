<footer class="bg-green-50 p-10 lg:p-20">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 border-b border-gray-300 pb-10 gap-x-20 lg:gap-x-60">
                <div class="mb-10">
                    <h2 class="text-green-400 text-xl lg:text-3xl mb-10">Stay up to date with the latest job opportunities.</h2>
                    <a href="" class="text-green-400 text-lg bg-transparent border border-green-400 h-14 rounded-full w-[200px] flex items-center justify-center hover:bg-green-400 hover:text-white duration-200">Find jobs</a>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2">

                        @foreach($footerLinks as $category => $links)
                            <div>
                                <h3 class="mb-10 text-xl text-gray-800">{{ $category }}</h3>
                                <ul>
                                    @foreach($links as $link)
                                        <li class="text-md mb-4 hover:underline"><a href="{{ $link['url'] }}">{{ $link['text'] }}</a></li>
                                    @endforeach
                                </ul>
                            </div> 
                        @endforeach
                            </ul>
                        </div>
                </div>
                

            <div class="flex items-center flex-col justify-between mt-10 lg:flex-row">
                <p class="mb-5">Copyright © 2023 HireMate .All rights reserved.</p>
                <div class="flex items-center gap-5">
                    @foreach($socialLinks as $link)
                        <a href="{{ $link['url'] }}"><img src="{{ $link['icon'] }}" alt=""></a>
                    @endforeach
                </div>
            </div>

        </div>
    </footer>