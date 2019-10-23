<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PasswordTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authenticated_admin_can_update_password()
    {
        $this->withoutExceptionHandling();
        $admin = factory('App\User')->create([
            'password' => bcrypt('secret')
        ]);

        $this->actingAs($admin);

        $this->patch(route('password.update'), [
            'oldPassword' => 'secret',
            'newPassword' => 'password',
        ])->assertSessionHas('success', 'Password Updated');
    }

    /** @test */
    public function unauthenticated_admin_cannot_update_password()
    {
        $this->patch(route('password.update'))->assertRedirect('/login');
    }
}
