<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <h1>Create Task</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach    
                </ul>
            </div>
        @endif

        <form action="{{ route('tasks.store', $project) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Task Name:</label>
                <input type="text" id="title" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Task description: </label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="status">Status: </label>
                <select name="status" id="status">
                    @foreach($statuses as $status)
                        <option value="{{ $status }}" {{ old('status') == $status ? 'selected' :  ''}}>
                            {{ ucfirst($status) }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
            <label for="priority">Priority: </label>
                <select name="priority" id="priority">
                    @foreach($priorities as $priority)
                        <option value="{{ $priority }}" {{ old('priority') == $priority ? 'selected' :  ''}}>
                            {{ ucfirst($priority) }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="due_date">Due Date: </label>
                <input type="date" id="due_date" name="due_date" value="{{ old('due_date')}}">
            </div>
            <div>
                <button type="submit" class="btn btn-outline-secondary">Create Task</button>
            </div>
        </form>
    </div>    
</body>
</html>