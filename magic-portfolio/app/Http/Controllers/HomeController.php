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
        return view('home', compact('navItems'))->with('title', 'HOME');
        
    }
}
