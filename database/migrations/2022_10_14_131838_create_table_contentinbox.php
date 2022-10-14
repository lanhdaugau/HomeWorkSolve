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
        Schema::create('contentinbox', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('idUsers');
            $table->unsignedInteger('idInbox');
            $table->timestamps();
            $table->foreign('idUsers')->references('id')->on('users');
            $table->foreign('idInbox')->references('id')->on('inbox');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contentinbox');
    }
};
