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
            'logo' => '<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M12 2a10 10 0 100 20 10 10 0 000-20zM12 18a6 6 0 110-12 6 6 0 010 12z" fill="#000"/>
                  </svg>',
            'text' => 'Full responsibility for the whole recruitment process'
            ],
            [
                'logo' => '<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M12 2a10 10 0 100 20 10 10 0 000-20zM12 18a6 6 0 110-12 6 6 0 010 12z" fill="#000"/>
                      </svg>',
                'text' => 'Full responsibility for the whole recruitment process'
                ],
                [
                    'logo' => '<svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M12 2a10 10 0 100 20 10 10 0 000-20zM12 18a6 6 0 110-12 6 6 0 010 12z" fill="#000"/>
                          </svg>',
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
