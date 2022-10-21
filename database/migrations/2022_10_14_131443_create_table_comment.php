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
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->boolean('isActive');
            $table->unsignedInteger('idUsers');
            $table->unsignedInteger('idPost');
            $table->unsignedInteger('parent_id')->nullable();
            $table->timestamps();
            $table->foreign('idUsers')->references('id')->on('users');
            $table->foreign('idPost')->references('id')->on('post');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
};
