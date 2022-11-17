<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customername',200);
            $table->string('contactperson',200);
            $table->text('address');
            $table->string('phone',25);
            $table->string('email',50);
            $table->string('iscontract')->default('N');
            $table->float('servicehour', 8, 2);
            $table->float('finalservicehour', 8, 2);
            $table->string('backupmonitoring',1);
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
        Schema::dropIfExists('customers');
    }
}
