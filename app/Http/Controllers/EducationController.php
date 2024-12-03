<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::all();
        return view('education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'school' => 'required|unique:education|max:255',
            'location' => 'required|max:255',
            'degree' => 'nullable|max:255',
            'major' => 'nullable|max:255',
            'start' => 'required|date',
            'end' => 'nullable|date|after_or_equal:start',
        ]);

        Education::create($request->all());

        return redirect()->route('education.index')->with('success', 'Education created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        return view('education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $request->validate([
            'school' => 'required|unique:education,school,' . $education->id . '|max:255',
            'location' => 'required|max:255',
            'degree' => 'nullable|max:255',
            'major' => 'nullable|max:255',
            'start' => 'required|date',
            'end' => 'nullable|date|after_or_equal:start',
        ]);

        $education->update($request->all());

        return redirect()->route('education.index')->with('success', 'Education updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('education.index')->with('success', 'Education deleted successfully!');
    }
}
