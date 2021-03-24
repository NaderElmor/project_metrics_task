@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <h2>Project Tasks</h2>
            <a style="float:right;margin-bottom: 10px;" href="{{route('projects')}}" class="btn btn-primary  "><i class="fas fa-undo-alt"></i> Back to the project </a>
            <table class="table table-striped table-hover text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($project_tasks as $i => $task)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                        <td>{{$task->name}}</td>
                        <td>


                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{$task->getStatus()}}  @if($task->status == 2) <i class="fas fa-check-circle"></i> @endif
                                </button>
                                <div class="dropdown-menu">
                                    <button  status="0" task_id="{{$task->id}}" class="update dropdown-item" href="#">On Beginning </button>
                                    <button  status="1"  task_id="{{$task->id}}" class="update dropdown-item" href="#">On Progress </button>
                                    <button  status="2" task_id="{{$task->id}}" class="update dropdown-item" href="#">Finished</button>
                                </div>
                            </div>



                        <td>{{$task->created_at->diffForHumans()}}</td>

                    </tr>
                @endforeach

                </tbody>
            </table>

            {{ $project_tasks->links()}}
        </div>

    </div>
</div>
@endsection
