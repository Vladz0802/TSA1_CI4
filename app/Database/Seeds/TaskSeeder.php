<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $day = fn (int $offset) => date('Y-m-d', strtotime("$offset day"));
        $now = date('Y-m-d H:i:s');

        $this->db->table('tasks')->truncate();
        $this->db->table('tasks')->insertBatch([
            // yesterday
            ['title' => 'Submit weekly progress report',  'status' => 'completed',   'task_date' => $day(-1), 'created_at' => $now],
            ['title' => 'Review pull requests',            'status' => 'completed',   'task_date' => $day(-1), 'created_at' => $now],
            // today
            ['title' => 'Team stand-up meeting',           'status' => 'completed',   'task_date' => $day(0),  'created_at' => $now],
            ['title' => 'Fix login page bug',              'status' => 'in_progress', 'task_date' => $day(0),  'created_at' => $now],
            ['title' => 'Update project documentation',    'status' => 'pending',     'task_date' => $day(0),  'created_at' => $now],
            ['title' => 'Email client about deployment',   'status' => 'pending',     'task_date' => $day(0),  'created_at' => $now],
            // tomorrow
            ['title' => 'Prepare sprint demo slides',      'status' => 'pending',     'task_date' => $day(1),  'created_at' => $now],
            ['title' => 'Database backup check',           'status' => 'pending',     'task_date' => $day(1),  'created_at' => $now],
            // in two days
            ['title' => 'Deploy version 1.2 to production','status' => 'pending',     'task_date' => $day(2),  'created_at' => $now],
        ]);
    }
}
