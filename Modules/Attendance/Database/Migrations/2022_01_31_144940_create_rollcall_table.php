<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRollcallTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rollcall', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('today_date');
            $table->time('attendance_time');
            $table->time('logout_time')->nullable();
            $table->time('time')->nullable();
            $table->string('time_wasted')->default(0);
            $table->string('overtime')->default(0);
            $table->text('description')->nullable();
            $table->string('status')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('rollcall');
    }
}
