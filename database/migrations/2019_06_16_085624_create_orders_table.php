<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number')->unsigned();
            $table->integer('status_id')->unsigned()->nullable();
            $table->integer('customer_id')->unsigned();
            $table->integer('address_id')->unsigned()->nullable();
            $table->integer('good_id')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->decimal('price', 5, 2)->unsigned();

            $table->timestamps();

            $table->foreign('customer_id')
            ->references('id')
            ->on('customers')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('status_id')
            ->references('id')
            ->on('statuses')
            ->onDelete('set null')
            ->onUpdate('cascade');
            $table->foreign('address_id')
            ->references('id')
            ->on('addresses')
            ->onDelete('set null')
            ->onUpdate('cascade');
            $table->foreign('good_id')
            ->references('id')
            ->on('goods')
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
        Schema::dropIfExists('orders');
    }
}
