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
        Schema::create('crew_bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_card_number');
            $table->foreign('id_card_number')->references('id_card_number')->on('crews');
            $table->unsignedBigInteger('bank_code');
            $table->foreign('bank_code')->references('id')->on('banks');
            $table->unsignedInteger('account_number');
            $table->string("owner_name");
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
        Schema::dropIfExists('crew_bank_accounts');
    }
};
