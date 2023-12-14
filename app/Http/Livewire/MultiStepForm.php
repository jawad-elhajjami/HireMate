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

    //increase multi step form without checking the fields if empty
    public function increaseStepWithoutCheckingFields(){
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }
    }

    //increase multi step form and check the fields if empty
    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }
    }
    //Checking fields if empty or not
    public function validateData(){
        if($this->currentStep == 1){
            $this->validate([
                'email'=>'required|email',
                'fullName'=>'required|string',
                'address'=>'required|string'
            ]);
        }
        if($this->currentStep == 2){
            $this->validate([
                
            ]);
        }
        if($this->currentStep == 3){
            $this->validate([
                
            ]);
        }
    }
}