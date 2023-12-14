<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Employer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginForm extends Component{
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

    public function submit(){
        $this->validate();
        $candidate = User::where('email', $this->email)->where('role', 'Candidate')->first();
        if (!$candidate || !Hash::check($this->password, $candidate->password)) {
            return "['message' => 'Invalid credentials']";
        }
        $token = $candidate->createToken('candidate-access-token')->plainTextToken;
        return "['token' => $token,'id' => $candidate->idUser]";
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