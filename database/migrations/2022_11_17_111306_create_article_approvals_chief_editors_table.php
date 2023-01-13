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
        Schema::create('article_approvals_chief_editors', function (Blueprint $table) {
            $table->id();
            $table->boolean("is_confirmation")->default(false);
            $table->foreignId("user_id")->constrained("users" , "id")->cascadeOnDelete() ;
            $table->foreignId("article_id")->constrained("articles" , "id")->cascadeOnDelete() ;
            
            $table->boolean("seen")->default(false) ;
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
        Schema::dropIfExists('article_approvals_chief_editors');
    }
};
