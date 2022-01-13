<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('designation_id')->constrained('designations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('role_permission_id')->constrained('role_permissions')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->enum('gender', ['Male', 'FeMale', 'Trans']);
            $table->string('photo')->nullable();
            $table->bigInteger('phone')->unique();
            $table->string('email')->unique();
            $table->string('father_name');
            $table->string('mother_name');
            $table->date('date_of_birth');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->date('date_of_joining');
            $table->date('date_of_reliving')->nullable();
            $table->enum('payment_type', ['Monthly', 'Hourly', 'Project'])->default('Monthly');
            $table->float('salary', 10, 2);
            $table->string('bank_name');
            $table->string('branch_name');
            $table->string('account_number');
            $table->string('ifsc_code');
            $table->string('pan_number');
            $table->string('aadhaar_number');
            $table->enum('documents', ['Submitted', 'Not Submitted'])->default('Not Submitted');
            $table->enum('status', ['Active', 'InActive'])->default('Active');
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
        Schema::dropIfExists('employees');
    }
}
