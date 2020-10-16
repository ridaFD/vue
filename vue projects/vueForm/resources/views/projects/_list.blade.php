<div class="">
    <h1>My Projects</h1>

    @foreach($projects as $project)
        <ul>
            <li>{{ $project->name }}</li>
        </ul>
    @endforeach
</div>
