<div class="container my-16 max-w-3xl mx-auto grid items-center justify-center">
    <form wire:submit.prevent="getStarted">

        <h1 class="text-4xl text-center pb-2">Ready to take your career to the next level ?</h1>
        <p class="text-base w-1/2 my-0 mx-auto text-center">Fill out your informations in the form below, it takes only a few moments.</p>
        <div class="bg-white w-[80%] mx-auto rounded-md h-auto p-[40px] border-solid border-2 border-gray-100 mt-8">
            <div class="@if($currentStep == 5) hidden @else flex @endif items-center justify-center w-full h-[5px] gap-x-3.5 mb-6">
                <div class="bg-[#4dd7834d] rounded-full w-[25%] h-full overflow-hidden">
                    <div class="bg-[#4DD783] w-full h-full"></div>
                </div>
                <div class="bg-[#4dd7834d] rounded-full w-[25%] h-full overflow-hidden">
                    <div class="@if($currentStep >= 2) bg-[#4DD783] @else bg-transparent @endif w-full h-full"></div>
                </div>
                <div class="bg-[#4dd7834d] rounded-full w-[25%] h-full overflow-hidden">
                    <div class="@if($currentStep >= 3) bg-[#4DD783] @else bg-transparent @endif w-full h-full"></div>
                </div>
                <div class="bg-[#4dd7834d] rounded-full w-[25%] h-full overflow-hidden">
                    <div class="@if($currentStep >= 4) bg-[#4DD783] @else bg-transparent @endif w-full h-full"></div>
                </div>
            </div>
                
            <!--STEP ONE-->
            @if($currentStep == 1)
            <div class="">
                
                <h2 class="text-[24px] text-[#4DD783] pb-2 font-medium">Create your account</h2>
                <p class="text-[14px] text-[#888]">By creating an account or logging in, you understand and agree to HireMate’s Terms of Service.</p>
                
                <x-forms.input inputType="email" inputName="Email" wire:model="email"/>
                <span class="text-xs text-[#D43E3E]">@error('email'){{ $message }}@enderror</span>

                <x-forms.input inputType="text" inputName="Full Name" wire:model="fullName"/>
                <span class="text-xs text-[#D43E3E]">@error('fullName'){{ $message }}@enderror</span>

                <x-forms.input inputType="text" inputName="Address" wire:model="address"/>
                <span class="text-xs text-[#D43E3E]">@error('address'){{ $message }}@enderror</span>
                
            </div>
            @endif

            <!--STEP TWO-->
            @if($currentStep == 2)
            <div class="">
                
                <h2 class="text-[24px] text-[#4DD783] pb-2 font-medium">Add Education</h2>
                <p class="text-[14px] text-[#888]">Give us a litte background about your education</p>
                
                <!--Drop-down for Education -->
                <div class="wrapper-dropdown mt-[20px]" id="dropdown">
                    <span class="selected-display" id="destination">Education Level</span>
                    <svg class="arrow" id="drp-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="transition-all ml-auto rotate-180">
                        <path d="M7 14.5l5-5 5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <ul class="dropdown">
                        <li class="item">High school or equivalent</li>
                        <li class="item">Bachelor's degree</li>
                        <li class="item">Master's degree</li>
                        <li class="item">Doctorate</li>
                    </ul>
                    <input type="hidden" class="hidden_input" value="">
                </div>

            </div>
            @endif

            <!--STEP THREE-->
            @if($currentStep == 3)
            <div class="">
                
                <h2 class="text-[24px] text-[#4DD783] pb-2 font-medium">Add Experience</h2>
                <p class="text-[14px] text-[#888]">Give us a litte background about your experience</p>
                
                
                
            </div>
            @endif

            <!--STEP FOUR-->
            @if($currentStep == 4)
            <div class="">
                
                <h2 class="text-[24px] text-[#4DD783] pb-2 font-medium">Upload resume</h2>
                <p class="text-[14px] text-[#888]">Upload your own resume to help your applications stand out</p>
                
                
                
            </div>
            @endif

            <div class="grid grid-rows-1 gap-y-2 mt-[20px]">
                @if($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
                <button class=" bg-[#4dd783] hover: w-full rounded-full py-[12px] text-white text-lg font-medium" type="button" wire:click="increaseStep()">Next</button>
                @endif
                @if($currentStep == 4)
                <button class=" bg-[#4dd783] hover: w-full rounded-full py-[12px] text-white text-lg font-medium" type="submit">Submit</button>
                @endif
                @if($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                <button class=" bg-[#EBF0EB] hover: w-full rounded-full py-[12px] text-[#2a2a2a] text-lg font-medium" type="button" wire:click="increaseStepWithoutCheckingFields()">Skip</button>
                @endif
            </div>

        </div>

    </form>
</div>