<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\WorkExperience;

class HomeController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $workExperience = WorkExperience::orderBy('start_date', 'desc')->get();
        return view('home', compact('profile', 'workExperience'));
    }
}
