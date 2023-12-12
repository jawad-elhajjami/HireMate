<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    public $footerLinks;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($footerLinks = null)
    {
        $this->footerLinks = $footerLinks ?: [
            'Explore' => [
                ['url' => '/explore/jobs', 'text' => 'Find Jobs'],
                ['url' => '/explore/companies', 'text' => 'Explore Companies'],
            ],
            'Discover' => [
                ['url' => '/discover/recommendations', 'text' => 'Personalized Recommendations'],
                ['url' => '/discover/categories', 'text' => 'Job Categories'],
            ],
            'Legal' => [
                ['url' => '/legal/privacy', 'text' => 'Privacy & Cookies'],
                ['url' => '/legal/terms', 'text' => 'Terms & Conditions'],
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer');
    }
}
