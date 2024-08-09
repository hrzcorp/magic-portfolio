<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $navItems = [
            ['name' => 'Demos', 'url' => '#'],
            ['name' => 'About', 'url' => '#'],
            ['name' => 'Blog', 'url' => '#'],
            ['name' => 'Pages', 'url' => '#'],
            ['name' => 'Contact', 'url' => '#'],
        ];

        $footerNavItems = [
            'Company' => [
                ['name' => 'Home', 'url' => '#'],
                ['name' => 'About', 'url' => '#'],
                ['name' => 'Blog', 'url' => '#'],
                ['name' => 'Pages', 'url' => '#'],
                ['name' => 'Contact', 'url' => '#']
            ],
            'Help' => [
                ['name' => 'Terms & Conditions', 'url' => '#'],
                ['name' => 'Privacy Policy', 'url' => '#'],
                ['name' => 'Customer Support', 'url' => '#']
            ],
            'Resources' => [
                ['name' => 'Terms & Conditions', 'url' => '#'],
                ['name' => 'Privacy Policy', 'url' => '#'],
                ['name' => 'Customer Support', 'url' => '#']
            ]
        ];

        $benefits = [
            [
                'logo' => 'images/images-1.png',
                'text' => 'Full responsibility for the whole recruitment process'
            ],
            [
                'logo' => 'images/images-4.png',
                'text' => 'Success fee - we will not charge you until you hire'
            ],
            [
                'logo' => 'images/images-2.png',
                'text' => 'We ensure transparancy at all stages of recruitment'
            ],
            [
                'logo' => 'images/images-5.png',
                'text' => 'We will adapt the cooperation model'
            ],
            [
                'logo' => 'images/images-3.png',
                'text' => 'Full responsibility for the whole recruitment process'
            ],
            [
                'logo' => 'images/images-6.png',
                'text' => 'Full responsibility for the whole recruitment process'
            ],

        ];

        $testimonials = [
            [
                'name' => 'Marjorie',
                'username' => '@monstermash',
                'profileImage' => 'path/to/profile-image.jpg',
                'message' => 'When it comes to recruitment, [Recruitment Company] is the best in the business. Their team is incredibly knowledgeable, responsive, and proactive. They took the time to understand our unique requirements and delivered exceptional candidates within a short timeframe.',
                'timestamp' => '23 April • 8:13 AM'
            ],
        ];

        return view('home', compact('navItems', 'footerNavItems','benefits', 'testimonials'))->with('title', 'HOME');

    }
}
