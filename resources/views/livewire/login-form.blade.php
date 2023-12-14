<div class="container mx-auto flex justify-center">
<form wire:submit.prevent="submit" class="lg:min-w-[500px] lg:max-w-[500px] max-w-[300px] min-w-[300px] lg:mt-20 p-4">
    @csrf
    <h1 class="text-3xl lg:text-4xl text-left mb-10">Login</h1>
    <x-forms.input inputType="email" inputName="Email address" wire:model="email" />
    @error('email') <span class="text-md w-fit text-red-600 error">{{ $message }}</span> @enderror
    <x-forms.input inputType="password" inputName="Password" wire:model="password" />
    @error('password') <span class="text-md w-fit text-red-600 error">{{ $message }}</span> @enderror
    <a href="" class="flex text-right justify-end w-fit mb-4 mt-3 text-green-400 text-md hover:text-gray-800 duration-200">Fogot password ?</a>
    <button type="submit" class="bg-green-400 rounded-full text-white w-full text-center py-3 text-md hover:bg-green-500 duration-200">Log in with email</button>
    <span class="h-px flex w-100 bg-gray-300 mt-10 mb-10"></span>
    <p class="text-md text-center mb-3">Need to create an account sign up as :</p>
    <div class="flex items-center justify-center gap-10">
        <a href="{{ route('GetStarted') }}" class="text-green-400 hover:text-gray-800 duration-200">Job seeker</a>
        <span class="h-4 w-px bg-gray-300"></span>
        <a href="{{ route('employer-getStarted') }}" class="text-green-400 hover:text-gray-800 duration-200">Employer</a>
    </div>       
</form>