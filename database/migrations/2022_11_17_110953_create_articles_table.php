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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("lang") ;
            $table->string("keywords") ;
            $table->text("fa_abstract");
            $table->text("en_abstract");
            $table->text("description") ;
            $table->string("resources");
            $table->string("file") ;
            $table->string("failed")->default("null");
            
          
            
            $table->foreignId("user_id")->constrained("users" , "id")->cascadeOnDelete();
            $table->foreignId("quarterly_id")->constrained("quarterlies" , "id")->cascadeOnDelete();
            


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
        Schema::dropIfExists('articles');
    }
};
