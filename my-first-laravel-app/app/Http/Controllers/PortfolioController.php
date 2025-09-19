<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'James Ayunting',

            'title' => 'Full Stack Web Developer',

            'email' => 'jamesayunting18@gmail.com',

            'phone' => '+639474887377',

            'location' => 'PH, Manila',

            'bio' => 'Hi, I’m James, an aspiring Full Stack Web Developer passionate about building clean, user-friendly, and responsive websites. I enjoy turning ideas into functional digital experiences using modern web technologies such as HTML, CSS, JavaScript, PHP, and Laravel.
                    Currently, I’m enhancing my skills in backend development and database management, while also exploring UI/UX design to create projects that are not only functional but also visually engaging.
                    My goal is to contribute to innovative projects that make an impact, continuously grow as a developer, and share my journey in tech through my portfolio.',

            'profile_image' => 'https://lh3.googleusercontent.com/a/ACg8ocKD6kD6Fg2vrH93TIZN3tm_OYv8M6HD7bL_3GOEPdtZRq-MghA=s288-c-no',

            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],

            'projects' => [], // Project data

            'experience' => [], // Experience data

            'education' => ['Primary: Panhghulo Elementary School 1'], // Education data

            'social_links' => [] // Social media links

        ];

        return view('portfolio.index', compact('portfolio'));

    }

}