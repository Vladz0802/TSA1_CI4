<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Home extends BaseController
{
    public function index(): string
    {
        $tasks = (new TaskModel())->getToday();

        return view('welcome', [
            'title' => 'Today',
            'date'  => date('l, F j, Y'),
            'tasks' => $tasks,
            'done'  => count(array_filter($tasks, fn ($t) => $t['status'] === 'completed')),
        ]);
    }
}
