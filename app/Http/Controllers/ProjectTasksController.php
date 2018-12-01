<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function update(Task $task)
    {
        # Original
        /* $task->update([
            'completed' => request()->has('completed')
        ]); */

        # 1st approach
        /* $task->complete(request()->has('completed')); */

        # 2nd approach
        /* request()->has('completed') ? $task->complete() : $task->incomplete(); */

        # 3rd approach
        $method = request()->has('completed') ? 'complete' : 'incomplete';
        $task-> $method();
        
        return back();
    }

    public function store(Project $project)
    {
        $attributes = request()->validate(['description' => 'required|min:255']);
        $project->addTask($attributes);

        # It can be moved to the model in a new addTask function
        /* Task::create([
            'project_id' => $project->id,
            'description' => request('description')
        ]);
        */
        return back(); 
    }
}
