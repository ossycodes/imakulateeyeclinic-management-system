<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function admin_can_register_new_patient()
    {
        $this->actingAs($admin=factory('App\User')->create());
        $patientDetails = factory('App\Patient')->raw();
        $this->postJson('/patients', $patientDetails)->assertStatus(200);
    }

    /** @test */
    public function admin_can_view_registered_patients()
    {
        $this->actingAs($admin = factory('App\User')->create());
        $patientDetails = factory('App\Patient')->raw();
        $this->postJson('/patients', $patientDetails);
        $this->get('patients')
            ->assertStatus(200)
            ->assertSee($patientDetails['fullname']);
    }

    /** @test */
    public function unauthenticated_admin_cannot_visit_dashboard_page()
    {
        $this->get('dashboard')->assertRedirect('/login');
    }

    /** @test */
    public function authenticated_admin_can_visit_dashboard_page()
    {
        $admin = factory('App\User')->create();
        $this->actingAs($admin);
        $this->get('dashboard')->assertOk();
    }

    /** @test */
    public function admin_can_delete_patient()
    {
        $this->actingAs($admin = factory('App\User')->create());
        $patient = factory('App\Patient')->create();
        $this->delete(route('patient.destroy', ['patient' => $patient]))
            ->assertRedirect('/patients');
    }

    /** @test */
    public function admin_can_update_patient_details()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($admin = factory('App\User')->create());
        $patient = factory('App\Patient')->create();
        $this->assertDatabaseHas('patients', [
            'fullname' => $patient->fullname
        ]);
        $this->patch(route('patient.update', ['patient' => $patient]),  [
            'fullname' => 'chris',
            'cliniccardnumber' => 'shsjhsjshs12341'
        ])->assertRedirect('/patients');

        $this->assertDatabaseHas('patients', [
            'fullname' => 'chris',
        ]);
    }
}
