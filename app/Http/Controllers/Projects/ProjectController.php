<?php

namespace App\Http\Controllers\Projects;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       $projects =  Project::paginate('10');
        return view('projects.index', compact('projects'));
    }



    public function show(Project $project)
    {
        $project_tasks = $project->tasks()->paginate('10');
        return  view('projects.project_tasks', compact('project_tasks'));
    }


    public function changeStatus(Request $request)
    {
        $id = $request->id;
        $status = $request->status;
        $task =   Task::find($id);

        $task->update(['status' => $status]);

    }

}
