<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('address_id');
            $table->tinyInteger('status');
            $table->timestamps();
        });

        Schema::create('order_infos', function(Blueprint $table) {
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id')->index();
            $table->integer('price');
            $table->string('data');
            $table->integer('count');
            $table->timestamps();
        });

        Schema::create('invoices', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id')->index();
            $table->string('uuid');
            $table->string('transaction_id');
            $table->string('refrence_id')->nullable();
            $table->string('amount');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_infos');
        Schema::dropIfExists('invoices');
    }
}
