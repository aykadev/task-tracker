<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(Project $project)
    {
        return view('tasks.create', compact('project'));
    }


    public function store(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'required',
            'status'=>'required|in:new,in_progress,done',
            'priority'=>'required|in:low,medium,high',
            'due_date'=>'nullable|date',
        ]);

        $task = new Task();
        $task->project_id = $project->id;
        $task->user_id = Auth::id();
        $task->title = $validate["title"];
        $task->description = $validate["description"];
        $task->status = $validate["status"];
        $task->priority = $validate["priority"];
        $task->due_date = $validate["due_date"];
        $task->save();

        return redirect()->route('projects.show',$project)->with ('success', "Task created successfully!");
    }
}
