<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('people_name');
            $table->string('people_contact');
            $table->string('people_contact_other');
            $table->string('people_home_address');
            $table->integer('people_designation');
            $table->integer('people_total');
            $table->integer('user_id');
            $table->integer('people_selected_room');
            $table->integer('people_selected_floor');
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
        Schema::dropIfExists('people');
    }
}
