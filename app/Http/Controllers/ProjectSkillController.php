<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class ProjectSkillController extends Controller
{
    /**
     * Menambahkan skill pada project tertentu.
     */
    public function addSkillToProject(Request $request, Project $project)
    {
        $request->validate([
            'skill_id' => 'required|exists:skills,id',
        ]);

        // Menambahkan skill ke project
        $project->skills()->attach($request->skill_id);

        return redirect()->route('projects.show', $project->id)
                         ->with('success', 'Skill added to project successfully!');
    }

    /**
     * Menghapus skill dari project tertentu.
     */
    public function removeSkillFromProject(Project $project, Skill $skill)
    {
        // Menghapus skill dari project
        $project->skills()->detach($skill->id);

        return redirect()->route('projects.show', $project->id)
                         ->with('success', 'Skill removed from project successfully!');
    }
}
