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
        Schema::create('referees_opinions', function (Blueprint $table) {
            $table->id();
            $table->string("overall_quality");
            $table->string("innovation");
            $table->string("abstract_quality");
            $table->string("resources_quality");
            $table->string("principles_writing");
            $table->string("conclusion_quality");
            $table->string("presentation_quality");
            $table->string("utilization_quality");
            $table->string("general_opinion");
            $table->string("general_description");
            $table->string("score");
            $table->foreignId("article_id")->constrained("articles" , "id")->cascadeOnDelete();  

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
        Schema::dropIfExists('referees_opinions');
    }
};
