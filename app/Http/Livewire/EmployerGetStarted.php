<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmployerGetStarted extends Component
{
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $businessName;
    public $address;
    public $zip;
    public $country;
    public $city;
    public $password;
    public $passwordConfirmation;
    public function render()
    {
        return view('livewire.employer-get-started');
    }
}
