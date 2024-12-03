<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Certification;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function show()
    {
        // Fetching all data from the database
        $experiences = Experience::all();
        $educations = Education::all();
        $trainings = Training::all();
        $certifications = Certification::all();

        // Passing data to the view
        return view('more_about', compact('experiences', 'educations', 'trainings', 'certifications'));
    }
}
