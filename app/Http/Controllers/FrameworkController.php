<?php

namespace App\Http\Controllers;

use App\Models\Framework;
use Illuminate\Http\Request;

class FrameworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frameworks = Framework::all();
        return view('framework.index', compact('frameworks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('framework.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        Framework::create($request->all());

        return redirect()->route('framework.index')->with('success', 'Framework created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Framework $framework)
    {
        return view('framework.edit', compact('framework'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Framework $framework)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $framework->update($request->all());

        return redirect()->route('framework.index')->with('success', 'Framework updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Framework $framework)
    {
        $framework->delete();

        return redirect()->route('framework.index')->with('success', 'Framework deleted successfully!');
    }
}
