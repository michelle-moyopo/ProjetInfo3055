<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('groupe_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('enabled')->default(1);
            $table->timestamps();

            $table->foreign('groupe_id')->references('id')->on('groupes')->cascadeOnDelete();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupe_users');
    }
}
