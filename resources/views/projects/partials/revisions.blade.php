<table class="table table-striped">
    <thead>
    <tr>
        <th>Revision</th>
        <th>Published</th>
    </tr>
    </thead>
    <tbody>
    @forelse($project->versions()->orderBy('revision', 'desc')->get() as $version)
        <tr>
            <td>{{ $version->revision }}</td>
            <td>{{ $version->published ? 'Yes' : 'No' }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="6">No revisions yet</td>
        </tr>
    @endforelse
    </tbody>
</table>
{!! Form::open(['method' => 'post', 'route' => ['project.publish', 'project' => $project->slug]]) !!}
<button class="btn btn-info" name="publish-resource" type="submit" value="publish">Publish</button>
{!! Form::close() !!}