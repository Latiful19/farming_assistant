<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->text('Full_Name');
            $table->text('User_Name');
            $table->string('Email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('Mobile_No')->unique();
            $table->text('Address');
            $table->string('password')->unique();
            $table->string('role')->default('user');
            $table->timestamps();
           

        });
    }

    /**
     * Reverse the migrations.z
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
