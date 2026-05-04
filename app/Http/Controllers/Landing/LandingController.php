<?php

namespace App\Http\Controllers\Landing;

use \App\Http\Controllers\Controller;
use \App\Models\Faq;
use \App\Models\Home;
use \App\Models\Team;
use \App\Models\Message;
use \App\Models\Service;
use \App\Models\Portfolio;
use \App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function index(): View
    {
        $data = [
            'home' => \App\Models\Home::first(),
            'about' => \App\Models\CompanyProfile::first(),
            'faq' => \App\Models\Faq::first(),
            'mesagge' => \App\Models\Message::first(),
            'portfolio' => \App\Models\Portfolio::first(),
            'service' => \App\Models\Service::first(),
            'team' => \App\Models\Team::first()
        ];

        return view('pages.landing.index', $data);
    }
}