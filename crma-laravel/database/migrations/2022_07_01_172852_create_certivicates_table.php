<?php

use Illuminate\Support\Facades\DB;
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
        Schema::create('certivicates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('certivicates')->insert([
            ['name' => 'Basic Safety Training (BST)'],
            ['name' => 'ARPA Simulator (AS)'],
            ['name' => 'Radar Simulator (RS)'],
            ['name' => 'Proficiency Survival Craft and Rescue Boat (PSCRB)'],
            ['name' => 'Advanced Fire Fighting (AFF)'],
            ['name' => 'Medical First Aid (MFA)'],
            ['name' => 'Medical Care (MC)'],
            ['name' => 'Crowd management Training(CMT)'],
            ['name' => 'Crowd Crisis Management &Human Behaviour(CCMHB)'],
            ['name' => 'Bridge Resources Management (BRM)'],
            ['name' => 'Engine Resources Management (ERM)'],
            ['name' => 'Ship Security Officers (SSO)'],
            ['name' => 'Electronic Chart Display and Information System (ECDIS)'],
            ['name' => 'International Maritime Dangerous Goods Code (IMDG code)'],
            ['name' => 'Security Awareness Training(SAT)'],
            ['name' => 'Seafares Designated Security Duties(SDSD)'],
            ['name' => 'Basic Oil Chemical Tanker (BOCT)'],
            ['name' => 'Advance Oil Tanker (AOT)'],
            ['name' => 'GOC – GMDSS (GOC – GMDSS)'],
            ['name' => 'Basic Liquid and Gas Tanker (BLGT)'],
            ['name' => 'Tanker Familirization Course'],
            ['name' => 'Rating Deck'],
            ['name' => 'Rating Engine'],
            ['name' => 'Able Deck'],
            ['name' => 'Able Engine'],
            ['name' => 'Advanced Training for Liquid Gas Tanker (ALGT)'],
            ['name' => 'Advanced Training for Chemical Tanker (ACT)'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certivicates');
    }
};
