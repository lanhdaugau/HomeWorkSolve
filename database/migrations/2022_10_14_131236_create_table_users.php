<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('avatar')->nullable();
            $table->date('birthday')->nullable();    
            $table->boolean('gender')->nullable();
            $table->unsignedInteger('idCity')->nullable();
            $table->unsignedInteger('idDistrict')->nullable();
            $table->unsignedInteger('idWard')->nullable();
            $table->boolean('role')->default(0);
            $table->string('activeToken')->nullable();
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
};
