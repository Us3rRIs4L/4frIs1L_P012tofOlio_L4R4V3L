<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all(); // Mengambil semua data Experience
        return view('experience.index', compact('experiences')); // Kirim data ke view
    }

    public function create()
    {
        return view('experience.create'); // Menampilkan form tambah data
    }

    public function store(Request $request)
    {
        $request->validate([
            'position' => 'required|max:255',
            'company' => 'required|max:255',
            'description' => 'nullable|max:1000',
            'start' => 'required|date',
            'end' => 'nullable|date|after_or_equal:start',
        ]);

        Experience::create($request->all()); // Simpan data
        return redirect()->route('experience.index')->with('success', 'Experience created successfully!');
    }

    public function edit(Experience $experience)
    {
        return view('experience.edit', compact('experience')); // Mengirim data experience ke form edit
    }

    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'position' => 'required|max:255',
            'company' => 'required|max:255',
            'description' => 'nullable|max:1000',
            'start' => 'required|date',
            'end' => 'nullable|date|after_or_equal:start',
        ]);

        $experience->update($request->all()); // Update data
        return redirect()->route('experience.index')->with('success', 'Experience updated successfully!');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete(); // Hapus data
        return redirect()->route('experience.index')->with('success', 'Experience deleted successfully!');
    }
}
