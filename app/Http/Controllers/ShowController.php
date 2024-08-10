<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Skill;
use App\Models\profile;
use App\Models\Project;
use App\Models\BlogPost;

use App\Models\Education;
use App\Models\Experience;
use App\Models\ContactData;
use Illuminate\Http\Request;
use App\Models\ProfessionalSummary;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;


class ShowController extends Controller
{

    public function show($unique_id)
    {
        $user = User::where('unique_id', $unique_id)->firstOrFail();

        $profile = profile::where('user_id', $user->id)->first();
        $educations = Education::where('user_id', $user->id)->get();
        $blogPosts = BlogPost::where('user_id', $user->id)->get();
        $contactData = ContactData::where('user_id', $user->id)->first();
        $summary = ProfessionalSummary::where('user_id', $user->id)->first();
        $experiences = Experience::where('user_id', $user->id)->get();
        $skills = Skill::where('user_id', $user->id)->get();
        $projects = Project::where('user_id', $user->id)->get();

        return view('CV.cv', compact('profile', 'contactData', 'educations', 'blogPosts', 'summary', 'experiences', 'skills', 'projects'));
    }




    public function share($unique_id)
    {
        $user = User::where('unique_id', $unique_id)->firstOrFail();

        $profile = Profile::where('user_id', $user->id)->first();
        $educations = Education::where('user_id', $user->id)->get();
        $blogPosts = BlogPost::where('user_id', $user->id)->get();
        $contactData = ContactData::where('user_id', $user->id)->first();
        $summary = ProfessionalSummary::where('user_id', $user->id)->first();
        $experiences = Experience::where('user_id', $user->id)->get();
        $skills = Skill::where('user_id', $user->id)->get();
        $projects = Project::where('user_id', $user->id)->get();

        return view('Front_End.main', compact('profile', 'contactData', 'educations', 'blogPosts', 'summary', 'experiences', 'skills', 'projects'));
    }

    // public function print($unique_id)
    // {

    //     $user = User::where('unique_id', $unique_id)->firstOrFail();

    //     $profile = Profile::where('user_id', $user->id)->first();
    //     $educations = Education::where('user_id', $user->id)->get();
    //     $blogPosts = BlogPost::where('user_id', $user->id)->get();
    //     $contactData = ContactData::where('user_id', $user->id)->first();
    //     $summary = ProfessionalSummary::where('user_id', $user->id)->first();
    //     $experiences = Experience::where('user_id', $user->id)->get();
    //     $skills = Skill::where('user_id', $user->id)->get();
    //     $projects = Project::where('user_id', $user->id)->get();
    //     $pdf = PDF::loadView('CV.cvX', compact('profile', 'contactData', 'educations', 'blogPosts', 'summary', 'experiences', 'skills', 'projects'))->setOptions(['defaultFont' => 'sans-serif']);

    //     return $pdf->download('invoice.pdf');


    // }

}
