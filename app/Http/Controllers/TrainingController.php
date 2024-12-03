<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainings = Training::all();
        return view('training.index', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('training.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'organization' => 'required|max:255',
            'start' => 'required|date',
            'end' => 'nullable|date|after_or_equal:start',
        ]);

        Training::create($request->all());

        return redirect()->route('training.index')->with('success', 'Training created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Training $training)
    {
        return view('training.edit', compact('training'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Training $training)
    {
        $request->validate([
            'title' => 'required|max:255',
            'organization' => 'required|max:255',
            'start' => 'required|date',
            'end' => 'nullable|date|after_or_equal:start',
        ]);

        $training->update($request->all());

        return redirect()->route('training.index')->with('success', 'Training updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Training $training)
    {
        $training->delete();

        return redirect()->route('training.index')->with('success', 'Training deleted successfully!');
    }
}
