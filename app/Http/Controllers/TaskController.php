<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'nullable|string',
            'assigned_to'=>'required|exists:users,id',
            'due_date'=>'nullable|date',
            'status'=>'required|in:new,in_progress,done',
            'priority'=>'required|in:low,medium,high',
        ]);

        $task = $project->tasks()->create([
            'title'=>$validatedData['title'],
            'description'=>$validatedData['description'],
            'assigned_to'=>$validatedData['assigned_to'],
            'due_date'=>$validatedData['due_date'],
            'status'=>$validatedData['status'],
            'priority'=>$validatedData['priority'],
        ]);

        return redirect()->route('projects.show',$project);
    }
}
