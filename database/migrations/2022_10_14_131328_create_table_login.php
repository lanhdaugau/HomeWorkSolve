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
        Schema::create('login', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('password');
<<<<<<< HEAD
            $table->boolean('role')->default(0);
=======
            $table->boolean('role')->default(1)->comment('0-admin, 1-member');
>>>>>>> 31ee70a9a4fad89bcff97151d52c6513f10eaaff
            $table->unsignedInteger('idUsers');
            $table->rememberToken();
            $table->boolean('isActive')->default(0);
            $table->timestamps();
            $table->foreign('idUsers')
                ->references('id')
                ->on('users')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login');
    }
};
