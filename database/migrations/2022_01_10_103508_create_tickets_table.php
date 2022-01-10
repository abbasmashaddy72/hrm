<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->constrained('departments')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('employee_id')->constrained('employee')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->string('name');
            $table->integer('phone');
            $table->string('email');
            $table->string('title');
            $table->longText('message');
            $table->enum('priority', ['Critical', 'High', 'Normal', 'Low'])->nullable()->default('Active');
            $table->enum('status', ['Open', 'Pending', 'Resolved', 'Closed'])->nullable()->default('Active');
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
        Schema::dropIfExists('tickets');
    }
}
