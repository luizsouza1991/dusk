<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreatePessoaTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     * @group pessoa
     * @return void
     */
    public function testCreatePessoa()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cadastro')
                    // ->type('nome', 'Luiz')
                    // ->press('Salvar')
                    // ->assertPathIs('/')
                    ->assertSee('Salvar')
                    ->press('Salvar')
                    ->visit('/');
        });
    }
}
