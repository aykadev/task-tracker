<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title}}</title>
</head>
<body>
    <h1>{{ $project->title}}</h1>
    <p>{{$project->description}}</p>

    @if ($project->tasks->isEmpty())
        <p>No Tasks found for this project.</p>
    @else
        <ul>
            @foreach ($project->tasks as $task)
                <li>{{ $task->title }} - {{$task->status}}</li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('tasks.create', $project)}}">
        <button>Create Task</button>
    </a>
</body>
</html>