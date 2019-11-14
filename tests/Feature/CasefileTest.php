<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CasefileTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function unauthenticated_admin_cannot_view_casefiles_of_patients()
    {
        $this->get(route('casefile'))->assertRedirect('/login');
        //write factory for casefile
    }

    /** @test */
    public function unauthenticated_admin_cannot_create_casefiles_of_patients()
    {
        $patient = factory('App\Patient')->create();
        $this->get(route('casefile.create', ['patient' => $patient]))->assertRedirect('/login');
        //write factory for casefile
    }

    /** @test */
    public function unauthenticated_admin_cannot_edit_casefiles_of_patients()
    {
        $patient = factory('App\Patient')->create();
        $casefile = 1;
        $this->get(route('casefile.edit', ['patient' => $patient, 'casefile' => $casefile]))->assertRedirect('/login');
        //write factory for casefile
    }

    /** @test */
    // public function unauthenticated_admin_cannot_delete_casefiles_of_patients()
    // {
    //     $patient = factory('App\Patient')->create();
    //     $casefile = 1;
    //     $this->get(route('casefile.edit', ['patient' => $patient, 'casefile' => $casefile]))->assertRedirect('/login');
    //     //write factory for casefile
    // }
}
