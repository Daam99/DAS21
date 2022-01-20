<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttemptDetaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attempt_detai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attempt_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('question_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('answer_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('attempt_detai');
    }
}
