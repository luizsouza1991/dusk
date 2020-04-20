<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class VueTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group vue-teste
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertVueContains('detalhes', 'Luiz', '@componente-exemplo');
                    // ->assertVue('firstname','Luiz', '@componente-exemplo');
        });
    }
}
