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
        Schema::create('crew_family_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_card_number');
            $table->foreign('id_card_number')->references('id_card_number')->on('crews');
            $table->string('role');
            $table->string('name');
            $table->unsignedInteger('phone_number');
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
        Schema::dropIfExists('crew_family_members');
    }
};
