<header class="bg-white sticky top-0 z-[9999] w-full border-b-[1px] border-gray-300">
        <nav class="border-gray-200 px-4 lg:px-14 py-8 container mx-auto">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-3xl">
                <a href="/" class="flex items-center">
                    <span class="site-logo self-center text-green-400 text-2xl font-semibold whitespace-nowrap">{{ config('app.name') }}</span>
                </a>
                <div class="flex relative ml-12">
                    <input class="border-gray-300 border-[1px] rounded-full outline-none h-[50px] w-96 px-5" type="text" name="inp-search" id="dashboard-inp-search" placeholder="Search...">
                    <button class="bg-[var(--color-primary)] rounded-full p-3 absolute right-1.5 top-1">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="7.98307" cy="7.6608" r="4.74576" stroke="white" stroke-width="2"/>
                            <path d="M14.0847 13.7624L12.0508 11.7285" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>                            
                    </button>
                </div>
                <div class="flex gap-3">
                    <span class="p-3 rounded-full hover:bg-gray-100 cursor-pointer">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="18" y="7" width="4" height="13" rx="1" stroke="#2A2A2A" stroke-width="2" stroke-linejoin="round"/>
                            <rect x="10" y="13" width="4" height="7" rx="1" stroke="#2A2A2A" stroke-width="2" stroke-linejoin="round"/>
                            <rect x="2" y="9" width="4" height="11" rx="1" stroke="#2A2A2A" stroke-width="2" stroke-linejoin="round"/>
                        </svg>                            
                    </span>
                    <span class="p-3 rounded-full hover:bg-gray-100 cursor-pointer">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.44784 7.96942C6.76219 5.14032 9.15349 3 12 3V3C14.8465 3 17.2378 5.14032 17.5522 7.96942L17.804 10.2356C17.8072 10.2645 17.8088 10.279 17.8104 10.2933C17.9394 11.4169 18.3051 12.5005 18.8836 13.4725C18.8909 13.4849 18.8984 13.4973 18.9133 13.5222L19.4914 14.4856C20.0159 15.3599 20.2782 15.797 20.2216 16.1559C20.1839 16.3946 20.061 16.6117 19.8757 16.7668C19.5971 17 19.0873 17 18.0678 17H5.93223C4.91268 17 4.40291 17 4.12434 16.7668C3.93897 16.6117 3.81609 16.3946 3.77841 16.1559C3.72179 15.797 3.98407 15.3599 4.50862 14.4856L5.08665 13.5222C5.10161 13.4973 5.10909 13.4849 5.11644 13.4725C5.69488 12.5005 6.06064 11.4169 6.18959 10.2933C6.19123 10.279 6.19283 10.2645 6.19604 10.2356L6.44784 7.96942Z" stroke="#2A2A2A" stroke-width="2"/>
                            <path d="M8 17C8 17.5253 8.10346 18.0454 8.30448 18.5307C8.5055 19.016 8.80014 19.457 9.17157 19.8284C9.54301 20.1999 9.98396 20.4945 10.4693 20.6955C10.9546 20.8965 11.4747 21 12 21C12.5253 21 13.0454 20.8965 13.5307 20.6955C14.016 20.4945 14.457 20.1999 14.8284 19.8284C15.1999 19.457 15.4945 19.016 15.6955 18.5307C15.8965 18.0454 16 17.5253 16 17" stroke="#2A2A2A" stroke-width="2" stroke-linecap="round"/>
                        </svg>                            
                    </span>
                    <span class="p-3 rounded-full hover:bg-gray-100 cursor-pointer">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.7274 20.4471C19.2716 19.1713 18.2672 18.0439 16.8701 17.2399C15.4729 16.4358 13.7611 16 12 16C10.2389 16 8.52706 16.4358 7.12991 17.2399C5.73276 18.0439 4.72839 19.1713 4.27259 20.4471" stroke="#2A2A2A" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="12" cy="8" r="4" stroke="#2A2A2A" stroke-width="2" stroke-linecap="round"/>
                        </svg>                            
                    </span>
                    <span class="p-3 rounded-full hover:bg-gray-100 cursor-pointer">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 7H19" stroke="#2A2A2A" stroke-width="2" stroke-linecap="round"/>
                            <path d="M5 12H19" stroke="#2A2A2A" stroke-width="2" stroke-linecap="round"/>
                            <path d="M5 17H19" stroke="#2A2A2A" stroke-width="2" stroke-linecap="round"/>
                        </svg>                            
                    </span>
                </div>
            </div> 
        </nav>
</header>