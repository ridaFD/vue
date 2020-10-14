<div class="">
    <h1>My Projects</h1>

    @foreach($prjects as $project)
        <ul>
            <li>{{ $project->name }}</li>
        </ul>
    @endforeach
</div>
