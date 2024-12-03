<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();
        return view('skill.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'progress' => 'required|numeric|min:0|max:100',
        ]);

        Skill::create($request->all());

        return redirect()->route('skill.index')->with('success', 'Skill created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        return view('skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => 'required|max:255',
            'progress' => 'required|numeric|min:0|max:100',
        ]);

        $skill->update($request->all());

        return redirect()->route('skill.index')->with('success', 'Skill updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()->route('skill.index')->with('success', 'Skill deleted successfully!');
    }
}
