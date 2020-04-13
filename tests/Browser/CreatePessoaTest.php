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
                    ->type('nome', 'Teste 1')
                    ->radio('sexo', 'Mulher')
                    ->select('linguagem')
                    ->type('descricao', 'Texto de exemplo')
                    ->press('Salvar')
                    ->visit('/')
                    ->assertSee('Laravel');
                    // ->assertSee('Salvar')
                    // ->press('Salvar')
                    // ->visit('/');
                    // Arr::random(['0', '1', '2', '3', '4', '5', '6'])
        });
    }
}
