<?php

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
            $table->increments('id');
            $table->string('username')->unique();
            $table->integer('customer_id')->unique();
            $table->string('firstname', 20);
            $table->string('lastname', 50);
            $table->enum('sex', array('man', 'vrouw'));
            $table->date('birthday');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->ipAddress('last_ip');
            $table->ipAddress('reg_ip');
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
        Schema::drop('users');
    }
}
