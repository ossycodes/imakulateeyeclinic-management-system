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
        //whip up a factory for this bruh!
        $patientDetails = [
            'fullname' => 'patient1',
            'parentname' => 'test',
            'address' => 'test',
            'occupation' => 'occupation',
            'phonenumber' => 'phonenumber',
            'alternativePhonenumber' => 'alternativePhonenumber',
            'nextOfKin' => 'nextOfKin',
            'dateOfBirth' => '2019-08-19',
            'cliniccardnumber' => 'shjhsjskjdkd'
        ];
        $this->postJson('/patients', $patientDetails)->assertStatus(200);
    }

    /** @test */
    public function admin_can_view_registered_patients()
    {
        //whip up a factory for this bruh!
        $patientDetails = [
            'fullname' => 'patient1',
            'parentname' => 'test',
            'address' => 'test',
            'occupation' => 'occupation',
            'phonenumber' => 'phonenumber',
            'alternativePhonenumber' => 'alternativePhonenumber',
            'nextOfKin' => 'nextOfKin',
            'dateOfBirth' => '2019-08-19',
            'cliniccardnumber' => 'shjhsjskjdkd'
        ];
        $this->postJson('/patients', $patientDetails);
        $this->get('patients')
            ->assertStatus(200)
            ->assertSee($patientDetails['fullname']);
    }
}
