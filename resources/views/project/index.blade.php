<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Birdboard</title>
</head>
<body>

<h1>Birdboard</h1>

<ul>
    @forelse($projects as $project)
        <li>
            <a href="{{ $project->path() }}"> {{ $project->title }} </a>
        </li>
    @empty
        <li>No projects yet.</li>
    @endforelse
</ul>
</body>
</html>