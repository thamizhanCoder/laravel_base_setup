<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAclUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acl_user', function (Blueprint $table) {
            $table->bigIncrements('acl_user_id');
            $table->unsignedBigInteger('acl_role_id')->nullable();
            $table->foreign('acl_role_id')->references('acl_role_id')->on('acl_role');
            $table->string('name')->nullable();
            $table->string('password')->nullable();
            $table->string('email')->nullable();
            $table->dateTime('last_login')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->text('remember_time')->nullable();
            $table->dateTime('remember_expire')->nullable();
            $table->text('verification_code')->nullable();
            $table->text('ip_address')->nullable();
            $table->string('new_pass_key')->nullable();
            $table->dateTime('new_pass_key_requested')->nullable();
            $table->dateTime('last_password_change')->nullable();
            $table->integer('email_verification')->nullable();
            $table->string('mobile_no')->nullable();
            $table->dateTime('date_updated')->nullable();
            $table->dateTime('date_created')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->dateTime('created_on')->nullable();
            $table->dateTime('updated_on')->nullable();
            $table->string('token',5000)->nullable();
        });

       

   
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acl_user');
    }
}
