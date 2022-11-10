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
        Schema::create('contactcontent', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->unsignedInteger('idContact');
            $table->unsignedInteger('idAuthur');
            $table->boolean('seen')->default(false);
            $table->timestamps();
            $table->foreign('idAuthur')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idContact')->references('id')->on('contact')->onDelete('cascade')->onUpdate('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactcontent');
    }
};
