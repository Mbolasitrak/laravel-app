<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function index()
    {
        //return TaskResource::collection(Task::all());
        return Task::all()->toResourceCollection();

    }
    public function show(Task $task){
        //return TaskResource::make($task);
        //return new TaskResource($task);
        return $task->toResource();

    }
}
