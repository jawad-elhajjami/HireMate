<div class="container my-16 max-w-3xl mx-auto grid items-center justify-center">
    <form wire:submit.prevent="getStarted" method="POST" class="w-full">
        @csrf
        <h1 class="text-4xl text-center pb-2">Ready to take your career to the next level ?</h1>
        <p class="text-base w-1/2 my-0 mx-auto text-center">Fill out your informations in the form below, it takes only a few moments.</p>
        <div class="bg-white w-[80%] mx-auto rounded-md h-auto p-[40px] border-solid border-2 border-gray-100 mt-8">
            <div class="@if($currentStep == 5) hidden @else flex @endif items-center justify-center w-full h-[5px] gap-x-3.5 mb-6">
                <div class="bg-[#4dd7834d] rounded-full w-[25%] h-full overflow-hidden">
                    <div class="@if($currentStep >= 1) bg-[#4dd783] @else bg-transparent @endif w-full h-full"></div>
                </div>
                <div class="bg-[#4dd7834d] rounded-full w-[25%] h-full overflow-hidden">
                    <div class="@if($currentStep >= 2) bg-[#4dd783] @else bg-transparent @endif w-full h-full"></div>
                </div>
                <div class="bg-[#4dd7834d] rounded-full w-[25%] h-full overflow-hidden">
                    <div class="@if($currentStep >= 3) bg-[#4dd783] @else bg-transparent @endif w-full h-full"></div>
                </div>
                <div class="bg-[#4dd7834d] rounded-full w-[25%] h-full overflow-hidden">
                    <div class="@if($currentStep >= 4) bg-[#4dd783] @else bg-transparent @endif w-full h-full"></div>
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
                
                <div class="flex flex-col w-full mt-3 mb-6">
                    <select name="educationLevel" class="w-full border border-gray-300 p-3 rounded-md" wire:model="educationLevel" >
                        <option value="Education Level" disabled selected>Education Level</option>
                        <option value="High school or equivalent">High school or equivalent</option>
                        <option value="Bachelor's degree">Bachelor's degree</option>
                        <option value="Master's degree">Master's degree</option>
                        <option value="Doctorate">Doctorate</option>
                    </select>
                    <span class="text-xs text-[#D43E3E]">@error('educationLevel'){{ $message }}@enderror</span>
                </div>
                <div class="flex flex-col w-full mb-3">
                    <select name="educationLevel" class="w-full border border-gray-300 p-3 rounded-md" wire:model="status">
                        <option value="Status" disabled selected>Status</option>
                        <option value="Graduated">Graduated</option>
                        <option value="Currently enrolled">Currently enrolled</option>
                        <option value="Neither">Neither</option>
                    </select>
                    <span class="text-xs text-[#D43E3E]">@error('status'){{ $message }}@enderror</span>
                </div>
                <div class="flex w-full gap-5 mb-6">
                    <div class="w-full">
                        <x-forms.input inputType="date" inputName="Start date"/>
                    </div>
                    <div class="w-full">
                        <x-forms.input inputType="date" inputName="End date"/>
                    </div>
                </div>
                
            </div>
            @endif

            <!--STEP THREE-->
            @if($currentStep == 3)
            <div class="">
                
                <h2 class="text-[24px] text-[#4DD783] pb-2 font-medium">Add Experience</h2>
                <p class="text-[14px] text-[#888]">Give us a litte background about your experience</p>
                
                <x-forms.input inputType="text" inputName="Company name"/>
                <span class="text-xs text-[#D43E3E]">@error('companyName'){{ $message }}@enderror</span>
                <x-forms.input inputType="text" inputName="Position"/>
                <span class="text-xs text-[#D43E3E]">@error('position'){{ $message }}@enderror</span>
                
                <div class="flex w-full gap-5 mb-6">
                    <div class="w-full">
                        <x-forms.input inputType="date" inputName="Start date"/>
                        <span class="text-xs text-[#D43E3E]">@error('startDate'){{ $message }}@enderror</span>
                    </div>
                    <div class="w-full">
                        <x-forms.input inputType="date" inputName="End date" disable/>
                        <span class="text-xs text-[#D43E3E]">@error('endDate'){{ $message }}@enderror</span>
                    </div>
                </div>
                
                <div class="flex items-center flex-row gap-5 mb-6">
                    <input type="checkbox" id="tos" checked>
                    <label for="tos">I still work here</label>
                </div>
                
            </div>
            @endif

            <!--STEP FOUR-->
            @if($currentStep == 4)
            <div class="">
                
                <h2 class="text-[24px] text-[#4DD783] pb-2 font-medium">Upload resume</h2>
                <p class="text-[14px] text-[#888] mb-6">Upload your own resume to help your applications stand out</p>
                
                <div class="fileUploadContainer bg-[#F5F5F5] border-[1px] border-dashed border-[#4dd783] rounded-[5px] py-20 cursor-pointer">
                    <div class="flex flex-col items-center justify-center">
                        <div class="file_upload w-[50px] h-[50px] rounded-full bg-white p-4 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path d="M15.9997 6.6665L15.6461 6.31295L15.9997 5.9594L16.3532 6.31295L15.9997 6.6665ZM16.4997 18.6665C16.4997 18.9426 16.2758 19.1665 15.9997 19.1665C15.7235 19.1665 15.4997 18.9426 15.4997 18.6665L16.4997 18.6665ZM8.97945 12.9796L15.6461 6.31295L16.3532 7.02006L9.68656 13.6867L8.97945 12.9796ZM16.3532 6.31295L23.0199 12.9796L22.3128 13.6867L15.6461 7.02006L16.3532 6.31295ZM16.4997 6.6665L16.4997 18.6665L15.4997 18.6665L15.4997 6.6665L16.4997 6.6665Z" fill="#4DD783"/>
                                <path d="M6.66699 21.3335L6.66699 22.6668C6.66699 24.1396 7.8609 25.3335 9.33366 25.3335L22.667 25.3335C24.1398 25.3335 25.3337 24.1396 25.3337 22.6668V21.3335" stroke="#4DD783"/>
                            </svg>
                        </div>
                        <p class=""><p class="hiddenFileInput font-medium">Click or drag to upload your resume</p> .txt, .pdf, .doc, or .rtf</p>
                    </div>
                    <input type="file" wire:model="file" accept=".txt, .pdf, .doc, .docx, .rtf" class="hidden" />
                </div>
                
            </div>
            @endif

            <!--FINAL STEP-->
            @if($currentStep == 5)
            <div class="w-full py-6">
                <div class="w-1/2 mx-auto flex flex-col items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="165" height="165" viewBox="0 0 165 165" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M82.5 144.375C116.673 144.375 144.375 116.673 144.375 82.5C144.375 48.3274 116.673 20.625 82.5 20.625C48.3274 20.625 20.625 48.3274 20.625 82.5C20.625 116.673 48.3274 144.375 82.5 144.375ZM111.152 62.8353C111.683 62.1989 111.597 61.253 110.96 60.7227C110.324 60.1923 109.378 60.2783 108.848 60.9147L75.5242 100.903L56.0607 81.4393C55.4749 80.8536 54.5251 80.8536 53.9393 81.4393C53.3536 82.0251 53.3536 82.9749 53.9393 83.5607L74.5643 104.186L75.7258 105.347L76.7773 104.085L111.152 62.8353Z" fill="#4DD783"/>
                    </svg>
                    <h1 class="text-2xl	text-[#4DD783]">You're all done</h1>
                    <p class="w-full text-center text-[#888] mt-1">You can edit your profile informations in the Settings</p>
                </div>
                <a href="#" type="button" class="mt-6 text-base w-full py-4 text-center bg-[#4DD783] text-white rounded-full">Go to dashboard</a>
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