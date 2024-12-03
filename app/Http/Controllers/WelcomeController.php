<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $skills = Skill::whereNotNull('progress')->where('progress', '>=', 0)->where('progress', '<=', 100)->get();

        $projects = Project::all();

        return view('welcome', compact('skills', 'projects'));
    }
}
