<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginForm extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
{
    $this->validate();

    // temporary
    $this->emit('loginSuccess');
    
    $this->reset(['email', 'password']);
    $this->resetValidation();
}


    public function render()
    {
        return view('livewire.login-form');
    }
}
