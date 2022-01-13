<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Add1st3cInUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_permission_id')->constrained('role_permissions')->onUpdate('cascade')->onDelete('cascade')->after('id');
            $table->enum('type', ['Employee', 'Client'])->after('name');
            $table->enum('status', ['Active', 'InActive'])->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumns('role_permissions_id');
            $table->dropColumns('type');
            $table->dropColumns('status');
        });
    }
}
