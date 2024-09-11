<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class HomeController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            // Note: this is example of permission middleware. Use this later for specified route. 
            // This permission required authentication of user
            // new Middleware(\Spatie\Permission\Middleware\PermissionMiddleware::using('read-post'), only: ['index']),
        ];
    }

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
                ['name' => 'FAQ', 'url' => '#'],
                ['name' => 'Customer Support', 'url' => '#']
            ],
            'Resources' => [
                ['name' => 'Terms & Conditions', 'url' => '#'],
                ['name' => 'Privacy Policy', 'url' => '#'],
            ]
        ];

        $benefits = [
            [
                'logo' => 'images/images-1.png',
                'text' => 'We will dive deep and research to customize the app as per your needs'
            ],
            [
                'logo' => 'images/images-4.png',
                'text' => 'Free consultation - we will not charge you until app development start'
            ],
            [
                'logo' => 'images/images-2.png',
                'text' => 'We ensure transparancy at all stages of development'
            ],
            [
                'logo' => 'images/images-5.png',
                'text' => 'On-time delivery of your project and support after launch'
            ],
            [
                'logo' => 'images/images-3.png',
                'text' => 'Full responsibility for the whole development process'
            ],
            [
                'logo' => 'images/images-6.png',
                'text' => 'We work with the certified developers'
            ],

        ];

        $testimonials = [
            [
                'name' => 'John Petrus',
                'username' => '@johnpetrus',
                'profileImage' => 'images/photo-profil-1.png',
                'message' => 'When it comes to app development, HRZ Indonesia is the best in the business. Their team is incredibly knowledgeable, responsive, and proactive. They took the time to understand our unique requirements and delivered exceptional app within a short timeframe.',
                'timestamp' => '23 April • 8:13 AM'
            ],
        ];

        $workfolios = [
            [
                'url' => '#',
                'title' => 'Indosat Ooredo',
                'image' => 'images/porto-1.png',
                'description' => 'Passionate about building robust web applications.',
                'tag' => [
                    'laravel', 
                    'developer'
                ]
            ],
            [
                'url' => '#',
                'title' => 'Pharmachy Organization',
                'image' => 'images/porto-2.png',
                'description' => 'Passionate about building robust web applications.',
                'tag' => [
                    'fullstack', 
                    'developer'
                ]
            ],
            [
                'url' => '#',
                'title' => 'Tech Insurance',
                'image' => 'images/porto-3.png',
                'description' => 'Passionate about building robust web applications.',
                'tag' => [
                    'laravel', 
                    'nodejs'
                ]
            ],
            [
                'url' => '#',
                'title' => 'Indosat Ooredo',
                'image' => 'images/porto-1.png',
                'description' => 'Passionate about building robust web applications.',
                'tag' => [
                    'fullstack', 
                    'developer'
                ]
            ],
            [
                'url' => '#',
                'title' => 'Pharmachy Organization',
                'image' => 'images/porto-2.png',
                'description' => 'Passionate about building robust web applications.',
                'tag' => [
                    'fullstack', 
                    'developer'
                ]
            ],
            [
                'url' => '#',
                'title' => 'Tech Insurance',
                'image' => 'images/porto-3.png',
                'description' => 'Passionate about building robust web applications.',
                'tag' => [
                    'laravel', 
                    'nodejs'
                ]
            ],
        ];

        return view('home', compact('navItems', 'footerNavItems','benefits', 'testimonials', 'workfolios'))->with('title', 'One Stop Software Solutions');

    }
}
