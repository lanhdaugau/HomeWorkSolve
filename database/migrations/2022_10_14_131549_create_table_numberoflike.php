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
            $table->id();
            $table->unsignedInteger('idUsers');
            $table->unsignedBigInteger('idComment');
            $table->timestamps();
            $table->foreign('idUsers')->references('id')->on('users');
            // $table->foreign('idComment')->references('id')->on('comment');
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
