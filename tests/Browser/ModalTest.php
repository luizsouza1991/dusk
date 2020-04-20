<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ModalTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *@group modal
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/foo')
                    ->click('@botao-modal')
                    ->whenAvailable('.modal', function ($modal){
                        $modal->assertSee('Modal')
                              ->press('Fechar');
                    });
                    // ->waitForText('Modal')
                    // ->assertSee('Meu modal');
        });
    }
}
