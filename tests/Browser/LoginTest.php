<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;

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
        // $user = factory(User::class)->create([
        //     'email' => 'luiz@laravel.com',
        //     'password' => bcrypt('password')
        // ]);
        
        // $this->browse(function (Browser $browser) use ($user) {
        //     $browser->visit('/login')
        //             ->type('email', $user->email)
        //             ->type('password', bcrypt('password'))
        //             ->press('Login')
        //             ->assertPathIs('/home');
        // });
    }
}
