<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodPocketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_pockets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blood_group_id');
            $table->unsignedBigInteger('blood_bank_id');
            $table->string('serial_number');
            $table->string('duree_vie');
            $table->foreign('blood_group_id')->references('id')->on('blood_groups')->cascadeOnDelete();
            $table->foreign('blood_bank_id')->references('id')->on('blood_banks')->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_pockets');
    }
}
