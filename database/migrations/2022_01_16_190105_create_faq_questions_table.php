<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("type_cathegories")->constrained("categories_questions");
            $table->string("question");
            $table->string("answer");
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq_questions');
    }
}
