<div class="lg:w-[600px] md:w-full flex justify-center flex-col items-center">
            <img src="images/vector1.svg" class="mb-10">
            <p class="text-gray-500 text-md mb-3 text-center">We have qualified workers looking for your jobs so let's get started!</p>
            <h3 class="text-xl text-center mb-5">Set up an account for your business in less than a minute.</h3>
            <span class="w-full h-px bg-gray-300 mb-3"></span>
            <form action="" method="POST" class="w-full">
                @csrf
                <div class="flex w-full gap-5 mb-3">
                <x-forms.input inputType="text" inputName="First name"/>
                <x-forms.input inputType="text" inputName="Last name"/>
                </div>
                <div class="flex w-full gap-5 mb-6">
                    <x-forms.input inputType="email" inputName="Email"/>
                    <x-forms.input inputType="tel" inputName="Phone"/>
                </div>
                <span class="w-full h-px bg-gray-300 mb-3 flex"></span>
                <x-forms.input inputType="text" inputName="Business name"/>
                <div class="flex w-full gap-5 mb-6">
                    <x-forms.input inputType="address" inputName="Address"/>
                    <x-forms.input inputType="text" inputName="ZIP Code"/>
                </div>
                <div class="flex w-full gap-5 mb-3">
                    <select name="country" id="countryList" class="w-full border border-gray-300 p-3 rounded-md">
                        <option value="Morocco">Morocco</option>
                    </select>
                    <select name="city" id="citiesList" class="w-full border border-gray-300 p-3 rounded-md">
                        <option value="Fés">Fés</option>
                        <option value="Casablanca">Casablanca</option>
                        <option value="Rabat">Rabat</option>
                    </select>
                </div>
                <div class="flex w-full gap-5 mb-6">
                    <x-forms.input inputType="password" inputName="Password"/>
                    <x-forms.input inputType="password" inputName="Confirm password"/>
                </div>
                <div class="flex items-center flex-row gap-5 mb-6">
                    <input type="checkbox" id="tos" checked>
                    <label for="tos"><p>By checking this box, you agree that the <a href="" class="underline">General Terms of Use</a>, <a href="" class="underline">Employer Terms</a> and the <a href="" class="underline">Privacy Policy</a> govern your use of the HireMate website and the services provided through the Dashboard.</p></label>
                </div>
                <span class="w-full h-px bg-gray-300 mb-6 flex"></span>
                <button type="submit" class="w-full bg-green-400 text-white p-3 rounded-full hover:bg-green-500 duration-200 mb-3">Sign up for free</button>
                <p class="text-center text-gray-800">Already have an account ? <a href="{{ route('login') }}" class="text-green-400 hover:text-gray-800 duration-200">Sign in</a></p>
            </form>
            
        </div>