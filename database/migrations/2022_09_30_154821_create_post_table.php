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
        // Schema::create('post', function (Blueprint $table) {
        //     $table->id();
        //     $table->boolean('isSolve');
        //     $table->string('caption');
        //     $table->string('content');
        //     $table->unsignedInteger('idUser');
        //     $table->integer('money');
        //     $table->timestamps();
        //    $table->foreign('id')
        //    ->references('idUser')->on('users');
        // });
        Schema::create('post', function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('userID');
            $table->timestamps();
            $table->foreign('userID')
                    ->references('id')
                    ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
};
