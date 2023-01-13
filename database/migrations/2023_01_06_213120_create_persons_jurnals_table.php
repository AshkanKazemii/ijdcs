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
        Schema::create('persons_jurnals', function (Blueprint $table) {
            $table->id();
            $table->string("name") ;
            $table->string("job");
            $table->text("link");
            $table->foreignId("role_id")->constrained("roles_jurnals" , "id")->cascadeOnDelete();
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
        Schema::dropIfExists('persons_jurnals');
    }
};
