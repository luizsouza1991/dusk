<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Task;

class TarefasTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     * @group task
     * @return void
     */
    public function testCreateTask()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/bar')
                ->waitForText('Tarefas')
                ->type('@task-input', 'Primeira tarefa')
                ->click('@task-submit')
                ->waitForText('Primeira tarefa')
                ->assertSee('Primeira tarefa');

            $browser->type('@task-input', 'Segunda tarefa')
                ->press('@task-submit')
                ->waitForText('Segunda tarefa')
                ->assertSee('Segunda tarefa');

            $this->assertDatabaseHas('tasks', ['text' => 'Primeira tarefa']);
            $this->assertDatabaseHas('tasks', ['text' => 'Segunda tarefa']);
        });
    }

    public function testRemoveTask()
    {
        $task = factory(Task::class)->create();
        $this->browse(function (Browser $browser) use ($task) {
            $browser->visit('/bar')
                ->waitForText('Tarefas')
                ->click("@remove-task1")
                ->pause(500)
                ->assertDontSee('test task');
        });
        $this->assertDatabaseMissing('tasks', $task->only(['id', 'text']));
    }

    public function testCompleteTask()
    {
        $task = factory(Task::class)->create();
        $this->browse(function (Browser $browser) use ($task) {
            $browser
                ->visit('/bar')
                ->waitForText('Tarefas')
                ->click("@check-task{$task->first()->id}")
                ->waitFor('.line-through');
        });
        $this->assertNotEmpty($task->fresh()->is_completed);
    }
}
