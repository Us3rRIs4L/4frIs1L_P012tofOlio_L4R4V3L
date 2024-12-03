<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all(); // Mengambil semua data
        // dd($projects);
        return view('project.index', compact('projects'));
    }

    public function create()
    {
        return view('project.create'); // Menampilkan form tambah data
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|max:1000',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validasi file
        ]);

        $project = Project::create($request->only('title', 'description'));

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images/' . $project->id);

            // Buat folder jika belum ada
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }

            $image->move($destinationPath, $imageName);
            $project->update(['image' => $imageName]); // Simpan nama file ke database
        }

        return redirect()->route('project.index')->with('success', 'Project created successfully!');
    }

    public function edit(Project $project)
    {
        return view('project.edit', compact('project')); // Menampilkan form edit
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|max:1000',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validasi file
        ]);

        $project->update($request->only('title', 'description'));

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images/' . $project->id);

            // Hapus gambar lama jika ada
            if ($project->image && File::exists($destinationPath . '/' . $project->image)) {
                File::delete($destinationPath . '/' . $project->image);
            }

            $image->move($destinationPath, $imageName);
            $project->update(['image' => $imageName]); // Simpan nama file baru ke database
        }

        return redirect()->route('project.index')->with('success', 'Project updated successfully!');
    }

    public function destroy(Project $project)
    {
        $destinationPath = public_path('images/' . $project->id);

        // Hapus gambar jika ada
        if ($project->image && File::exists($destinationPath . '/' . $project->image)) {
            File::delete($destinationPath . '/' . $project->image);
        }

        // Hapus folder jika kosong
        if (File::exists($destinationPath) && File::isDirectory($destinationPath)) {
            File::deleteDirectory($destinationPath);
        }

        $project->delete(); // Hapus data proyek

        return redirect()->route('project.index')->with('success', 'Project deleted successfully!');
    }
}
