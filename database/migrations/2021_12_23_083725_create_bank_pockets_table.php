<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankPocketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_pockets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blood_bank_id');
            $table->unsignedBigInteger('blood_pocket_id');

            $table->foreign('blood_bank_id')->references('id')->on('blood_banks')->cascadeOnDelete();
            $table->foreign('blood_pocket_id')->references('id')->on('blood_pockets')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_pockets');
    }
}
