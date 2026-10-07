<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index(): string
    {
        return view('tasks', [
            'title' => 'All Tasks',
            'tasks' => (new TaskModel())->getAllByDate(),
            'today' => date('Y-m-d'),
        ]);
    }
}
