<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certifications = Certification::all();
        return view('certification.index', compact('certifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('certification.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'organization' => 'required|max:255',
            'issue_date' => 'required|date',
            'expiry_date' => 'nullable|date|after_or_equal:issue_date',
        ]);

        Certification::create($request->all());

        return redirect()->route('certification.index')->with('success', 'Certification created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certification $certification)
    {
        return view('certification.edit', compact('certification'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certification $certification)
    {
        $request->validate([
            'title' => 'required|max:255',
            'organization' => 'required|max:255',
            'issue_date' => 'required|date',
            'expiry_date' => 'nullable|date|after_or_equal:issue_date',
        ]);

        $certification->update($request->all());

        return redirect()->route('certification.index')->with('success', 'Certification updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certification $certification)
    {
        $certification->delete();

        return redirect()->route('certification.index')->with('success', 'Certification deleted successfully!');
    }
}
