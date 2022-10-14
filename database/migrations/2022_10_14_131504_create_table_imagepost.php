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
        Schema::create('imagepost', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path_image')->nullable();
            $table->unsignedInteger('idPost');
            $table->timestamps();
            $table->foreign('idPost')
             ->references('id')
            ->on('post');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagepost');
    }
};
