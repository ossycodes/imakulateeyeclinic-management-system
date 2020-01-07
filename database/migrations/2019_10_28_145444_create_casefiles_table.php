<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasefilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casefiles', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->unsignedInteger('patient_id');
            $table->mediumText('casehistory')->nullable();
            $table->mediumText('systemic')->nullable();
            $table->string('family')->nullable();
            $table->string('lasteyeexamination')->nullable();
            $table->string('uvaod6m')->nullable();
            $table->string('uvaos6m')->nullable();
            $table->string('uvaod04m')->nullable();
            $table->string('uvaos04m')->nullable();
            $table->string('pinhholetestod')->nullable();
            $table->string('pinholetestos')->nullable();
            $table->string('stenopaicdiscod')->nullable();
            $table->string('stenopaicdiscos')->nullable();
            $table->string('avaod6m')->nullable();
            $table->string('avaos6m')->nullable();
            $table->string('avaod04m')->nullable();
            $table->string('avaos04m')->nullable();
            $table->string('ppod')->nullable();
            $table->string('ppos')->nullable();
            $table->mediumText('ee')->nullable();
            $table->mediumText('uva6m')->nullable();
            $table->mediumText('ue')->nullable();
            $table->mediumText('ie')->nullable();
            $table->string('prefferedeye')->nullable();
            $table->string('bloodpressure')->nullable();
            $table->string('bloodsugar')->nullable();
            $table->string('age')->nullable();
            $table->string('weight')->nullable();
            $table->string('tonometryod')->nullable();
            $table->string('tonometryos')->nullable();
            $table->string('time')->nullable();
            $table->string('anaesthetics')->nullable();
            $table->string('autorefractometryod')->nullable();
            $table->string('autorefractometryos')->nullable();
            $table->string('staticretinoscopyod')->nullable();
            $table->string('staticretinoscopyos')->nullable();
            $table->string('subjectiveod')->nullable();
            $table->string('subjectiveos')->nullable();
            $table->string('staticretinoscopyadd')->nullable();
            $table->string('spectacleprescriptionod')->nullable();
            $table->string('spectacleprescriptionos')->nullable();
            $table->string('pd')->nullable();
            $table->string('dist')->nullable();
            $table->string('near')->nullable();
            $table->string('bifocal')->nullable();
            $table->string('vanilux')->nullable();
            $table->string('typesoflenses')->nullable();
            $table->string('thinnerlenses')->nullable();
            $table->string('antireflectivelenses')->nullable();
            $table->string('photochronic')->nullable();
            $table->string('sunglasses')->nullable();
            $table->string('tint')->nullable();
            $table->string('nextappointment')->nullable();
            $table->string('doctorsname')->nullable();
            $table->mediumText('additionaltestsandcomments')->nullable();
            $table->mediumText('assessmentplan')->nullable();
            $table->string('diagnosis')->nullable();
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casefiles');
    }
}
