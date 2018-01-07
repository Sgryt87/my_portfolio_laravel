@extends ('admin.template')
@section ('content')
    <div class="card">
        <div class="header">
            <h1 class="title">Projects</h1>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Url</th>
                <th>Image</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Edit</th>
                <th>Delete</th>
                </thead>
                <tbody>
                @if(count($projects) > 0)
                    @foreach($projects as $project)
                        <tr>
                            <td>{{$project->id}}</td>
                            <td><a href="{{ url('/admin/projects/' . $project->id) }}">{{$project->title}}</a></td>
                            <td><a href="{{$project->url}}" target="blank_">{{$project->url}}</a></td>
                            <td>
                                <img width="100px" src="{{ asset('../storage/app/public/images/' .$project->image) }}"
                                     alt="{{$project->title}}"></td>
                            <td>{{ date('M j, Y h:ia', strtotime($project->created_at)) }}</td>
                            <td>{{ date('M j, Y h:ia', strtotime($project->updated_at)) }}</td>
                            <td><a href="{{url('/admin/projects/' . $project->id . '/edit')}}" class="btn
                            btn-default">Edit</a></td>
                            <td>
                                {!!Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <h2>No Projects Found</h2>
                @endif
                </tbody>
            </table>

        </div>
    </div>
@endsection
