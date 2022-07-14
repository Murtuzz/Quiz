<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserQuestionPapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_question_papers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('question_paper_id');
            $table->unsignedBigInteger('question_id');

            $table->foreign('question_paper_id')->references('id')->on('question_papers')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('quiz_questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_question_papers');
    }
}
