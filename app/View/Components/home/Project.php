<?php

namespace App\View\Components\home;

use Illuminate\View\Component;
use Illuminate\Support\Arr;

class Project extends Component
{

    public array $items = [];
    public array $tabs = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Flutter', 'Oracle Apex', 'iOS', 'Android', 'PHP'],
                'title' => 'Full Stack app with Laravel, Flutter and Oracle Apex',
                'image' => url('/images/litta-reporta.png'),
                'url' => 'https://youtu.be/pHIh4EU0MtE'
            ],
            [
                'category' => ['Oracle Apex', 'Laravel', 'PHP'],
                'title' => 'A student record management system for the Government Technical Institute',
                'image' => url('/images/gti.png'),
                'url' => 'https://youtu.be/pHIh4EU0MtE'
            ],
            [
                'category' => ['Wordpress', 'PHP'],
                'title' => 'A redesign of the Ministry of Tourism Website',
                'image' => url('/images/mot.png'),
                'url' => 'https://youtu.be/pHIh4EU0MtE'
            ],
            [
                'category' => ['Laravel', 'PHP'],
                'title' => 'A Laravel Microservice that was build to showcase covidcase statuses around the world.',
                'image' => url('/images/bot.jpeg'),
                'url' => 'https://youtu.be/38fJX4oj9tk'
            ],
            [
                'category' => ['Flutter', 'Oracle Apex', 'iOS', 'Android'],
                'title' => 'Mobile App for SacPackaging Customers to view packages, invoices, quotes easier.',
                'image' => url('/images/sac.png'),
                'url' => '_self'
            ]
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.project');
    }
}
