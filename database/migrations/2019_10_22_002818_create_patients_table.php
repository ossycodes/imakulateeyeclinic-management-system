<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('slug');
            $table->string("parentname")->nullable();
            $table->string("address");
            $table->string("occupation")->nullable();
            $table->string("phonenumber");
            $table->string("alternativephonenumber")->nullable();
            $table->string('nextofkin')->nullable();
            $table->string('dateofbirth');
            $table->string("cliniccardnumber");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
