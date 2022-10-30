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
        Schema::create('react', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->integer('rating');
            $table->unsignedInteger('idUsers');
            $table->unsignedInteger('idAuthur');
            $table->timestamps();
            $table->foreign('idUsers')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idAuthur')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('react');
    }
};
