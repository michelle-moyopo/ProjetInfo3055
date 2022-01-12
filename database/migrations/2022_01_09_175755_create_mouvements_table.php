<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMouvementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mouvements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blood_pocket_id');
            $table->unsignedBigInteger('blood_bank_id');
            $table->integer('type_mouvement'); // 0 for exit and 1 for entry
            $table->foreign('blood_pocket_id')->references('id')->on('blood_pockets')->cascadeOnDelete();
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
        Schema::dropIfExists('mouvements');
    }
}
