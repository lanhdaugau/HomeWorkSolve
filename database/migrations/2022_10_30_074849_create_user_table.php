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
            $table->boolean('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->string('avatar')->nullable();
            $table->string('address')->nullable();
            $table->unsignedInteger('idCity')->nullable();
            $table->unsignedInteger('idDistrict')->nullable();
            $table->unsignedInteger('idWard')->nullable();
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
