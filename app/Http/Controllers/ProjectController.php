<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectController extends Controller
{
    public function create()
    {
        return view('projects.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'nullable|string',
        ]);

        $project = new Project();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->save();

        return redirect()->route('project.index')
        ->with('success', 'Project created successfully!');
    }
}
