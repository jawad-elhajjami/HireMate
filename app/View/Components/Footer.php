<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    public $footerLinks;
    public $socialLinks;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($socialLinks = null, $footerLinks = null)
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

            $this->socialLinks = $socialLinks ?: [
                ['url' => '', 'icon' => 'icons/fb.svg'],
                ['url' => '', 'icon' => 'icons/instagram.svg'],
                ['url' => '', 'icon' => 'icons/linkedin.svg']
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
