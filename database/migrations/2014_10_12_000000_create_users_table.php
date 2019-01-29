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
            $table->increments('user_id');
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique()->nullable(true);
            $table->string('gender')->nullable(true);
            $table->longText('additional_description')->nullable(true);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('v_id')->unsigned()->nullable(true);
            $table->integer('photo_id')->unsigned()->nullable(true);
            $table->integer('user_type_id')->unsigned();
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
