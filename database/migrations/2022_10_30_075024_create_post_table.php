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
        
        Schema::create('post', function(Blueprint $table){
            $table->increments('id');
            $table->string('caption');
            $table->string('content');
            $table->unsignedInteger('idUsers');
            $table->boolean('isActive')->default(0);
            $table->string('slug');
            $table->timestamps();
            $table->foreign('idUsers')
                    ->references('id')
                    ->on('users')->onDelete('cascade')->onUpdate('cascade');
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
