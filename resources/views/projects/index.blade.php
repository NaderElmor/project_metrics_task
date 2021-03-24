@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Projects</h2>
            <table class="table table-striped table-hover text-center">
                <thead class="thead-dark  ">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">End Time</th>
                        <th scope="col">Creator</th>
                        <th scope="col">Tasks</th>
                        <th >Finished   </th>
                        <th>Created at</th>
                    </tr>
                </thead>
                <tbody>

                @foreach($projects as $i => $project)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                        <td>{{$project->name}}</td>
                        <td>{{$project->start_time}}</td>
                        <td>{{$project->end_time}}</td>
                        <td>{{$project->user->name}}</td>
                        <th scope="col"><a href="{{route('projects.show', $project->id)}}"> {{$project->tasks->count()}}   <i class="fas fa-tasks"></i> </a> </th>
                        <th> {{ number_format(($project->tasks()->completed()) / ($project->tasks->count()) * 100,0)}} %</th>
                        <td>{{$project->created_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $projects->links()}}
        </div>

    </div>
</div>
@endsection
