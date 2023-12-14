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
                <select class="mt-4 w-full py-[10px] px-[15px] border-[1px] border-[#d9d9d9] rounded-[5px] outline-none " name="EducationLevel">
                    <option value="Education Level" disabled selected hidden>Education Level</option>
                    <option value="High school or equivalent">High school or equivalent</option>
                    <option value="Bachelor's degree">Bachelor's degree</option>
                    <option value="Master's degree">Master's degree</option>
                    <option value="Doctorate">Doctorate</option>
                </select>
                <span class="text-xs text-[#D43E3E]">@error('educationDropDown'){{ $message }}@enderror</span>

                <!--Drop-down for Status -->
                <select class="mt-4 w-full py-[10px] px-[15px] border-[1px] border-[#d9d9d9] rounded-[5px] outline-none " name="EducationLevel">
                    <option value="Status" disabled selected hidden>Status</option>
                    <option value="High school or equivalent">High school or equivalent</option>
                    <option value="Bachelor's degree">Bachelor's degree</option>
                    <option value="Master's degree">Master's degree</option>
                    <option value="Doctorate">Doctorate</option>
                </select>
                <span class="text-xs text-[#D43E3E]">@error('statusDropDown'){{ $message }}@enderror</span>

                <!--Date inputs html code-->
                <div class="mt-4 flex items-center justify-between w-full gap-x-4">
                    <!--Start Date-->
                    <div class="date-container flex items-center justify-between w-full border-[1px] border-[#D9D9D9] rounded-[5px] py-[10px] px-[15px]">
                        <input type="date" class="date-input" wire:model="startDate">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="24" viewBox="0 0 27 24" fill="none">
                            <rect x="3.38086" y="6" width="19.8095" height="15" rx="2" stroke="#888888" stroke-width="2"/>
                            <path d="M4.48145 11H22.0899" stroke="#888888" stroke-width="2" stroke-linecap="round"/>
                            <path d="M9.98389 16H16.5871" stroke="#888888" stroke-width="2" stroke-linecap="round"/>
                            <path d="M8.8833 3L8.8833 7" stroke="#888888" stroke-width="2" stroke-linecap="round"/>
                            <path d="M17.6875 3L17.6875 7" stroke="#888888" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <span class="text-xs text-[#D43E3E]">@error('startDate'){{ $message }}@enderror</span>
                    <!--End Date-->
                    <div class="date-container flex items-center justify-between w-full border-[1px] border-[#D9D9D9] rounded-[5px] py-[15px] px-[20px]">
                        <input type="date" class="date-input" wire:model="endDate">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="24" viewBox="0 0 27 24" fill="none">
                            <rect x="3.38086" y="6" width="19.8095" height="15" rx="2" stroke="#888888" stroke-width="2"/>
                            <path d="M4.48145 11H22.0899" stroke="#888888" stroke-width="2" stroke-linecap="round"/>
                            <path d="M9.98389 16H16.5871" stroke="#888888" stroke-width="2" stroke-linecap="round"/>
                            <path d="M8.8833 3L8.8833 7" stroke="#888888" stroke-width="2" stroke-linecap="round"/>
                            <path d="M17.6875 3L17.6875 7" stroke="#888888" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <span class="text-xs text-[#D43E3E]">@error('endDate'){{ $message }}@enderror</span>
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