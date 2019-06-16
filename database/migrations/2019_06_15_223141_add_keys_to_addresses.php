<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKeysToAddresses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->foreign('customer_id')
            ->references('id')
            ->on('customers')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('city_id')
            ->references('id')
            ->on('adr_cities')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('street_id')
            ->references('id')
            ->on('adr_streets')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('type_id')
            ->references('id')
            ->on('adr_street_types')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('number_id')
            ->references('id')
            ->on('adr_numbers')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addresses', function (Blueprint $table) {
            //
        });
    }
}
