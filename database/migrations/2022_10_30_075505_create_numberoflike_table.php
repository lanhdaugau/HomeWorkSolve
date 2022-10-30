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
        Schema::create('numberoflike', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idUsers');
            $table->unsignedInteger('idComment');
            $table->timestamps();
            $table->foreign('idUsers')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idComment')->references('id')->on('comment')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('numberoflike');
    }
};
