<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use App\Models\CandidateClient;
use App\Services\TelegramService;

class HomeController extends Controller implements HasMiddleware
{
    protected $telegram;

    public function __construct(TelegramService $telegram)
    {
        $this->telegram = $telegram;
    }

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
            ['name' => 'About', 'url' => '#about'],
            ['name' => 'Contact', 'url' => '#contact-us'],
        ];

        $customerMessage = "Hi HRZ Indonesia! I am interested in working with you. Please contact me for further discussion. Thank you.";
        $customerMessage = rawurlencode($customerMessage);
        $customerMessageLink = "https://wa.me/6285735868483?text=".$customerMessage;

        $footerNavItems = [
            'Company' => [
                ['name' => 'Home', 'url' => '#'],
                ['name' => 'About', 'url' => '#about'],
                ['name' => 'Contact', 'url' => '#contact-us']
            ],
            'Help' => [
                ['name' => 'Customer Support', 'url' => $customerMessageLink]
            ],
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
                'profileImage' => 'images/black.png',
                'message' => 'When it comes to app development, HRZ Indonesia is the best in the business. Their team is incredibly knowledgeable, responsive, and proactive. They took the time to understand our unique requirements and delivered exceptional app within a short timeframe.',
                'timestamp' => '23 April • 8:13 AM'
            ],
            [
                'name' => 'Sandy',
                'username' => '@sandy',
                'profileImage' => 'images/black.png',
                'message' => 'HRZ Indonesia has been an absolute pleasure to work with. Their expertise in app development is unmatched, and they consistently deliver high-quality results. I highly recommend them to anyone looking for a reliable and professional app development partner.',
                'timestamp' => '15 February • 9:15 AM'
            ],
            [
                'name' => 'Michael',
                'username' => '@michael',
                'profileImage' => 'images/black.png',
                'message' => 'HRZ Indonesia exceeded my expectations in every way possible. Their attention to detail, creativity, and technical skills are top-notch. They truly care about their clients and go above and beyond to ensure satisfaction. I couldn’t have asked for a better app development experience.',
                'timestamp' => '1 August • 10:15 AM'
            ],
        ];

        $workfolios = [
            [
                'url' => '#',
                'title' => 'Saas Landing Page',
                'image' => 'images/ecommerce.png',
                'description' => 'Saas using laravel framework and tailwind',
                'tag' => [
                    'tailwind',
                    'laravel'
                ]
            ],
            [
                'url' => '#',
                'title' => 'Travel Agency App',
                'image' => 'images/travel.png',
                'description' => 'Robust web applications. Using advance payment gateway and affiliate system.',
                'tag' => [
                    'php', 
                    'bootstrap',
                    'laravel',
                ]
            ],
            [
                'url' => '#',
                'title' => 'Machine Learning Solution',
                'image' => 'images/machine-learning.webp',
                'description' => 'Machine learning solution for data analysis.',
                'tag' => [
                    'python', 
                    'sklearn',
                    'tensorflow',
                ]
            ],
            [
                'url' => '#',
                'title' => 'Household App',
                'image' => 'images/household.png',
                'description' => 'Household management application.',
                'tag' => [
                    'python', 
                    'django'
                ]
            ],
            [
                'url' => '#',
                'title' => 'Web Scraping Application',
                'image' => 'images/web-scrap.png',
                'description' => 'Web scraping application using python.',
                'tag' => [
                    'python', 
                    'selenium',
                ]
            ],
            [
                'url' => '#',
                'title' => '.Net Core Web API',
                'image' => 'images/dotnet.png',
                'description' => '.Net core web api for mobile application.',
                'tag' => [
                    'C#', 
                    '.NET',
                ]
            ],
        ];

        return view('home', compact('navItems', 'footerNavItems','benefits', 'testimonials', 'workfolios'))->with('title', 'One Stop Software Solutions');
    }

    public function sendRegistrationForm(Request $request)
    {
        try {
            // add process to save user and message to database
            $validatedData = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'title' => 'required|string',
                'message' => 'required|string',
                'phone' => 'required|numeric'
            ]);

            $candidateClient = new CandidateClient();
            $candidateClient->name = $validatedData['name'];
            $candidateClient->email = $validatedData['email'];
            $candidateClient->title = $validatedData['title'];
            $candidateClient->message = $validatedData['message'];
            $candidateClient->phonenumber = $validatedData['phone'];
            $candidateClient->save();
            
            $customerMessage = "Thank you ".$validatedData['name']." for contacting us! We will get back to you soon, have a nice day!";
            $inquiryMessage = "New inquiry from ".$validatedData['name']." with email ".$validatedData['email']." and Phone Number ".$validatedData['phone'].". Title: ".$validatedData['title'].". Message: ".$validatedData['message'];
            $inquiryMessage = $inquiryMessage."\n Fast response here https://wa.me/".$validatedData['phone']."?text=";
            $this->telegram->sendMessage($inquiryMessage);

            return redirect()->back()->with('success', $customerMessage);
        } catch (\Throwable $th) {
            logger()->error($th);
            return redirect()->back()->with('error', 'Something went wrong, please try again.');
        }
    }
}
