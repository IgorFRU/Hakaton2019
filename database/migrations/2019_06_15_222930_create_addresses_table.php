<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('customer_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->integer('street_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->integer('number_id')->unsigned();
            $table->string('address');
            $table->string('coordinate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
