<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('vendor_name')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('bill_image')->nullable();
            $table->float('price', 10, 2);
            $table->enum('payment_mode', ['Cash', 'Cheque', 'Bank Transfer', 'UPI']);
            $table->integer('stock');
            $table->integer('defective')->default(0);
            $table->integer('trashed')->default(0);
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('inventories');
    }
}
