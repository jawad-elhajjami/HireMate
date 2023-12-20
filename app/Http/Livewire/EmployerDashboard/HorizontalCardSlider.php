<?php

namespace App\Http\Livewire\EmployerDashboard;

use Livewire\Component;

class HorizontalCardSlider extends Component
{
    public $cardId;
    public $icHeartSrc = "images/ic-empty-heart.png";

    public function render()
    {
        return view('livewire.employer-dashboard.horizontal-card-slider');
    }

    public function likeProfil() {
        if ($this->icHeartSrc == 'images/ic-empty-heart.png') {
            // Add class to heart and change image source
            $this->icHeartSrc = 'images/ic-full-heart.png';
        } else {
            // Remove class from heart and change image source
            $this->icHeartSrc = 'images/ic-empty-heart.png';
        };
    }
}
