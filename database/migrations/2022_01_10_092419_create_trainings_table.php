<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['Online Training', 'Seminar', 'Lecture', 'Workshop', 'Hands On Training', 'Webinar']);
            $table->string('subject');
            $table->enum('nature', ['Internal', 'External']);
            $table->string('location');
            $table->string('sponsored_by');
            $table->string('organized_by');
            $table->timestamp('from');
            $table->timestamp('to');
            $table->string('description');
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
        Schema::dropIfExists('trainings');
    }
}
