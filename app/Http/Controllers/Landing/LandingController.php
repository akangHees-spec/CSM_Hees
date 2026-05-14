<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Home;
use App\Models\Team;
use App\Models\Message;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\CompanyProfile;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function index(): View
    {
        $data = [
            'home'    => Home::first(),
            'about'   => CompanyProfile::first(),
            'faqs'       => Faq::all(),
            'portfolios'  => Portfolio::all(),
            'services'    => Service::all(),
            'teams'       => Team::all(),
        ];

        return view('pages.landing.index', $data);
    }
}
