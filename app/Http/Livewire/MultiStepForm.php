<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Candidate;

class MultiStepForm extends Component
{
    use WithFileUploads;

    public $email;
    public $fullName;
    public $address;

    public $totalSteps = 5;
    public $currentStep = 1;

    public function mount(){
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.multi-step-form');
    }
}
