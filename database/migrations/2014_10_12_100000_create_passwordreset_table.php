<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passwordreset', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('token',5000)->nullable();
            $table->dateTime('created_on');
            $table->string('validity_hours')->nullable();
            $table->string('expired_time')->nullable();
            $table->integer('acl_user_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('employee_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passwordreset');
    }
}
