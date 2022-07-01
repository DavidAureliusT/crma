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
        Schema::create('crews', function (Blueprint $table) {
            $table->unsignedBigInteger("id_card_number");
            $table->primary('id_card_number');
            $table->string('photo_profile')->nullable();
            $table->string('fullname');
            $table->foreignId('gender_id')->constrained('genders');
            $table->date("birthdate");
            $table->string('birthplace');
            $table->integer('phone_number');
            $table->foreignId('province_id')->constrained('provinces');
            $table->foreignId('regency_id')->constrained('regencies');
            $table->foreignId('district_id')->constrained('districts');
            $table->foreignId('village_id')->constrained('villages');
            $table->integer('postal_code');
            $table->string('home_address');
            $table->foreignId('religion_id')->constrained('religions');
            $table->foreignId('blood_type_id')->constrained('blood_types');
            $table->integer('family_card_number');
            $table->integer('npwp_card_number');
            $table->integer('bpjstk_number');
            $table->integer('bpjskes_number');
            $table->foreignId('created_by')->constrained('users');
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
        Schema::dropIfExists('crews');
    }
};
