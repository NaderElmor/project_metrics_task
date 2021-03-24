<?php

namespace App\Http\Controllers\Tasks;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{

    public function show(Task $task)
    {
        return view('tasks.show', compact($task));
    }


}
