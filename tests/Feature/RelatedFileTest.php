<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RelatedFileTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function unauthenticated_admin_cannot_create_related_file_for_patient()
    {
        $patient = factory('App\Patient')->create();

        $this->post(route('relatedfile.store', ['patient' => $patient]), [
            'record' => 'initial related file'
        ])->assertRedirect('/login');
    }

    /** @test */
    public function admin_can_create_related_file_for_patient()
    {
        $this->actingAs($admin = factory('App\User')->create());

        $patient = factory('App\Patient')->create();

        $this->post(route('relatedfile.store', ['patient' => $patient]), [
            'record' => 'initial related file'
        ])->assertRedirect(route('relatedfiles'));
    }

    /** @test */
    public function unauthenticated_admin_cannot_edit_related_file_for_patient()
    {
        $patient = factory('App\Patient')->create();

        $relatedFile = factory('App\Relatedfile')->create([
            'patient_id' => $patient->id
        ]);

        $this->patch(route('relatedfile.update', ['relatedfile' => $relatedFile]), [
            'record' => 'updated related file'
        ])->assertRedirect('/login');
    }

    /** @test */
    public function admin_can_edit_related_file_for_patient()
    {
        $this->actingAs($admin = factory('App\User')->create());

        $patient = factory('App\Patient')->create();

        $relatedFile = factory('App\Relatedfile')->create([
            'patient_id' => $patient->id
        ]);

        $this->patch(route('relatedfile.update', ['relatedfile' => $relatedFile]), [
            'record' => 'updated related file'
        ])->assertRedirect(route('relatedfiles'));
    }

    /** @test */
    // public function admin_can_read_related_file_for_patient()
    // {
    //     $patient = factory('App\Patient')->create();

    //     $relatedFile = factory('App\Relatedfile')->create([
    //         'patient_id' => $patient->id
    //     ]);


    //     $this->get(route('relatedfile.show', ['patient' => $patient]))
    //                 ->assertRedirect('relatedfiles.show');
    // }


    /** @test */
    public function admin_must_be_authenticated_to_view_related_file_for_patient()
    {
        $this->get(route('relatedfiles'))->assertRedirect('/login');
    }

    /** @test */
    public function admin_can_view_all_related_files()
    {
        $this->markTestSkipped(
            'NotificationCount issue'
          );

        $this->withoutExceptionHandling();

        $this->actingAs($admin = factory('App\User')->create());

        $patient1 = factory('App\Patient')->create();

        $relatedFile1 = factory('App\Relatedfile')->create([
            'patient_id' => $patient1->id
        ]);

        $patient2 = factory('App\Patient')->create();

        $relatedFile2 = factory('App\Relatedfile')->create([
            'patient_id' => $patient2->id
        ]);

        $this->get(route('relatedfiles'))
            // ->assertViewIs('relatedfiles.index');
            ->assertSee($relatedFile1->record)
            ->assertSee($relatedFile2->record);
    }

    /** @test */
    public function unauthenticated_admin_cannot_delete_related_file_for_patient()
    {
        $patient = factory('App\Patient')->create();

        $relatedFile = factory('App\Relatedfile')->create([
            'patient_id' => $patient->id
        ]);

        $this->delete(route('relatedfile.destroy', ['relatedfile' => $relatedFile]))->assertRedirect('/login');
    }

    /** @test */
    public function admin_can_delete_related_file_for_patient()
    {
        $this->actingAs($admin = factory('App\User')->create());

        $patient = factory('App\Patient')->create();

        $relatedFile = factory('App\Relatedfile')->create([
            'patient_id' => $patient->id
        ]);

        $this->delete(route('relatedfile.destroy', ['relatedfile' => $relatedFile]))->assertRedirect(route('relatedfiles'));
    }
}
