<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttendeesTable extends Migration {

    public function up()
    {
        Schema::create('attendees', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('event_id')->unsigned()->index();
            $table->string('name', 25)->nullable(false);
            $table->string('role', 25 )->nullable(false);
            $table->string('county', 25)->nullable();
            $table->string('email', 50)->nullable();
        });
    }

    public function down()
    {
        Schema::drop('attendees');
    }
}