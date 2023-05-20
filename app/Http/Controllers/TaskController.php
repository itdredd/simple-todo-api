<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function getAll()
    {
        return response()->json(Task::all());
    }

    public function get($task)
    {
        return Task::find($task);
    }

    public function create(Request $request)
    {
        return Task::create($request->all());
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());

        return $task;
    }

    public function delete($task)
    {
        $task = Task::find($task);
        return $task ? $task->delete() : [];
    }

}
