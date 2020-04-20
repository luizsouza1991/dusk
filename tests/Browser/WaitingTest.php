<?php

namespace Tests\Browser;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class WaitingTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * @group waiting
     * A Dusk test example.
     *
     * @return void
     */
    public function testWaiting()
    {
        factory(User::class)->create();
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/home')
                    ->waitForText('Luiz')
                    // waitForText('Texto procurado', 3)
                    // segundo parametro é a quantidade em segundos que o teste deve esperar até lançar a mensagem de erro
                    ->assertSee('Luiz');
        });
    }
}
