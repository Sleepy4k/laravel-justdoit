<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            [
                'user' => '1',
                'task' => 'Init Note App',
                'subject' => 'Init a system that save people note',
                'priority' => 'high',
                'isDone' => 'true'
            ],
            [
                'user' => '1',
                'task' => 'Make Note App',
                'subject' => 'Create a system that save people note',
                'priority' => 'high',
                'isDone' => 'false'
            ],
            [
                'user' => '1',
                'task' => 'Fix Note App',
                'subject' => 'Fix a system that save people note',
                'priority' => 'high',
                'isDone' => 'false'
            ],
            [
                'user' => '1',
                'task' => 'Send Note App',
                'subject' => 'Send a system that save people note',
                'priority' => 'medium',
                'isDone' => 'false'
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
