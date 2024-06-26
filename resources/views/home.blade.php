@if ($projects->isEmpty())
        <p>No projects found.</p> 
    @else
        <ul>
            @foreach ($projects as $project)
                <li>
                    <a href="{{ route('projects.show', $project)}}">{{ $project->title}}</a> 
                </li>
             @endforeach
        </ul>
    @endif

    <a href="{{ route('projects.create')}}">
        <button>Create Project</button>
    </a>  