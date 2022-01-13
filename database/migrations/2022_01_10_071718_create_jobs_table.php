<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('position');
            $table->enum('type', ['Contractual', 'Part Time', 'Full Time'])->nullable();
            $table->integer('experience');
            $table->string('location');
            $table->string('salary_range');
            $table->string('short_description');
            $table->longText('description');
            $table->date('apply_date')->nullable();
            $table->date('close_date')->nullable();
            $table->enum('status', ['Opening', 'Closed', 'Drafted']);
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
        Schema::dropIfExists('jobs');
    }
}
