<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;
use Tests\Browser\Pages\LoginPage;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     * @group login
     * @return void
     */
    public function testExample()
    {
        $user = factory(User::class)->create([
            'email' => 'luiz@laravel.com'
        ]);
        
        $this->browse(function ($browser) use ($user) {
            // $browser->visit('/login')
            //         ->type('email', $user->email)
            //         ->type('password', 'teste')
            //         ->press('Login')
            //         ->assertRouteIs('home')
            //         ->assertSee('You are logged in!');
            $browser->visit(new LoginPage)
                    ->signIn($user->email)
                    ->assertRouteIs('home')
                    ->assertSee('You are logged in!');
        });
    }
}
