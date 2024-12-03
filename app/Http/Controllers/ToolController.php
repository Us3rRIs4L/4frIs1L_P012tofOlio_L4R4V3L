<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tools = Tool::all();
        return view('tool.index', compact('tools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tool.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        Tool::create($request->all());

        return redirect()->route('tool.index')->with('success', 'Tool created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tool $tool)
    {
        return view('tool.edit', compact('tool'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tool $tool)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $tool->update($request->all());

        return redirect()->route('tool.index')->with('success', 'Tool updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tool $tool)
    {
        $tool->delete();

        return redirect()->route('tool.index')->with('success', 'Tool deleted successfully!');
    }
}
