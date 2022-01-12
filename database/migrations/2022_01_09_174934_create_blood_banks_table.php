<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_banks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('responsable_id');
            $table->unsignedBigInteger('gestionnaire_id');
            $table->string('fosas_name');
            $table->string('contact')->nullable();
            $table->integer('enabled')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('district_id')->references('id')->on('districts')->cascadeOnDelete();
            $table->foreign('responsable_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('gestionnaire_id')->references('id')->on('users')->cascadeOnDelete();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_banks');
    }
}
