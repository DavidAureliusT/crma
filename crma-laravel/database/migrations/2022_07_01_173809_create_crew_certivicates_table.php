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
        Schema::create('crew_certivicates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_card_number');
            $table->foreign('id_card_number')->references('id_card_number')->on('crews');
            $table->foreignId('certivicate_id')->constrained('certivicates');
            $table->date('release_at');
            $table->date('expired_at');
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
        Schema::dropIfExists('crew_certivicates');
    }
};
