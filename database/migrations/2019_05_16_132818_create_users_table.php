<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('email')->uniqid();
            $table->string('password');
            $table->bigInteger('phone_no');
            $table->string('division')->uniqid();
            $table->string('district')->uniqid();
            $table->string('status')->default(0);
            $table->string('zip_code')->uniqid();
            $table->string('ip_address')->nullable();
            $table->text('shipping_address')->nullable();
            $table->string('street_address')->nullable();
            $table->string('avatar')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
