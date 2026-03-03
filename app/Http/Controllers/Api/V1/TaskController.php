<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function index()
    {
        return Task::all();

    }
}
