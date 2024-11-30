<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Client;
use App\Models\EducationQualification;
use App\Models\Project;
use App\Models\Service;

class FrontendController extends Controller
{
    public function frontendShowAbout(){

        $aboutFrontend = About::get();
        $service = Service::get();
        $project = Project::get();
        $education = EducationQualification::get();
        $client = Client::get();
        return view('frontend.index', compact('aboutFrontend', 'service', 'project', 'education','client'));
    }
}
