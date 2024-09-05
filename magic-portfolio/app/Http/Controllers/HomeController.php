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
                'profileImage' => 'images/photo-profil-1.png',
                'message' => 'When it comes to recruitment, [Recruitment Company] is the best in the business. Their team is incredibly knowledgeable, responsive, and proactive. They took the time to understand our unique requirements and delivered exceptional candidates within a short timeframe.',
                'timestamp' => '23 April • 8:13 AM'
            ],
            [
                'name' => 'Albert Flores',
                'username' => '@Albertflores',
                'profileImage' => 'images/photo-profil-2.png',
                'message' => 'Working with AllHire was a game-changer for our organization. Their professionalism and expertise made the recruitment process seamless and efficient. We found our ideal candidate thanks to their exceptional service.',
                'timestamp' => '23 April • 8:13 AM'
            ],
            [
                'name' => 'C',
                'username' => '@monstermash',
                'profileImage' => 'images/photo-profil-1.png',
                'message' => 'When it comes to recruitment, ',
                'timestamp' => '23 April • 8:13 AM'
            ],
            [
                'name' => 'D',
                'username' => '@monstermash',
                'profileImage' => 'images/photo-profil-1.png',
                'message' => 'When it comes to recruitment, [Recruitment Company] is the best in the business. Their team is incredibly knowledgeable, responsive, and proactive. They took the time to understand our unique requirements and delivered exceptional candidates within a short timeframe.',
                'timestamp' => '23 April • 8:13 AM'
            ],
            [
                'name' => 'E',
                'username' => '@monstermash',
                'profileImage' => 'images/photo-profil-1.png',
                'message' => 'When it comes to recruitment, [Recruitment Company] is the best in the business. Their team is incredibly knowledgeable, responsive, and proactive. They took the time to understand our unique requirements and delivered exceptional candidates within a short timeframe.',
                'timestamp' => '23 April • 8:13 AM'
            ],
            [
                'name' => 'F',
                'username' => '@monstermash',
                'profileImage' => 'images/photo-profil-1.png',
                'message' => 'When it comes to recruitment, [Recruitment Company] is the best in the business. Their team is incredibly knowledgeable, responsive, and proactive. They took the time to understand our unique requirements and delivered exceptional candidates within a short timeframe.',
                'timestamp' => '23 April • 8:13 AM'
            ],
            [
                'name' => 'G',
                'username' => '@monstermash',
                'profileImage' => 'images/photo-profil-1.png',
                'message' => 'When it comes to recruitment, [Recruitment Company] is the best in the business. Their team is incredibly knowledgeable, responsive, and proactive. They took the time to understand our unique requirements and delivered exceptional candidates within a short timeframe.',
                'timestamp' => '23 April • 8:13 AM'
            ],
            [
                'name' => 'H',
                'username' => '@monstermash',
                'profileImage' => 'images/photo-profil-1.png',
                'message' => 'When it comes to recruitment, [Recruitment Company] is the best in the business. Their team is incredibly knowledgeable, responsive, and proactive. They took the time to understand our unique requirements and delivered exceptional candidates within a short timeframe.',
                'timestamp' => '23 April • 8:13 AM'
            ],
            [
                'name' => 'I',
                'username' => '@monstermash',
                'profileImage' => 'images/photo-profil-1.png',
                'message' => 'When it comes to recruitment, [Recruitment Company] is the best in the business. Their team is incredibly knowledgeable, responsive, and proactive. They took the time to understand our unique requirements and delivered exceptional candidates within a short timeframe.',
                'timestamp' => '23 April • 8:13 AM'
            ],
            [
                'name' => 'J',
                'username' => '@monstermash',
                'profileImage' => 'images/photo-profil-1.png',
                'message' => 'When it comes to recruitment, [Recruitment Company] is the best in the business. Their team is incredibly knowledgeable, responsive, and proactive. They took the time to understand our unique requirements and delivered exceptional candidates within a short timeframe.',
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

        return view('home', compact('navItems', 'footerNavItems','benefits', 'testimonials', 'workfolios'))->with('title', 'HOME');

    }
}
