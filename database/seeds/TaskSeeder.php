<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'text' => 'Tarefa 1',
        ]);

        Task::create([
            'text' => 'Tarefa 2',
        ]);

        Task::create([
            'text' => 'Tarefa 3',
        ]);
    }
}
