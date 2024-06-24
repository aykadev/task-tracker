<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'nullable|string',
        ]);

        $project = Project::create([
            'title' => $validateData['title'],
            'description' =>$validateData['description'],
            'user_id'=> Auth::id(),
        ]);

        return redirect()->route('project.index');
    }
}
