<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Framework;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Tool;
use App\Models\Training;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Ambil semua data experience
        $experiences = Experience::all();
        $educations = Education::all();
        $trainings = Training::all();
        $certifications = Certification::all();
        $projects = Project::all();
        $skills = Skill::all();
        $frameworks = Framework::all();
        $tools = Tool::all();

        // Kirim data ke tampilan dashboard
        return view('dashboard', compact('experiences', 'educations', 'trainings', 'certifications', 'projects', 'skills', 'frameworks', 'tools'));
    }
}
