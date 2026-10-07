<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table         = 'tasks';
    protected $primaryKey    = 'id';
    protected $returnType    = 'array';
    protected $allowedFields = ['title', 'status', 'task_date', 'created_at'];

    // Tasks scheduled for today only.
    public function getToday(): array
    {
        return $this->where('task_date', date('Y-m-d'))
                    ->orderBy('id')
                    ->findAll();
    }

    // Every task, earliest date first.
    public function getAllByDate(): array
    {
        return $this->orderBy('task_date')
                    ->orderBy('id')
                    ->findAll();
    }
}
