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
        Schema::create('licences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('licences')->insert([
            ['name' => 'Ahli Nautika Tingkat I'],
            ['name' => 'Ahli Nautika Tingkat II'],
            ['name' => 'Ahli Nautika Tingkat III'],
            ['name' => 'Ahli Nautika Tingkat IV'],
            ['name' => 'Ahli Nautika Tingkat V'],
            ['name' => 'Ahli Nautika Tingkat Dasar'],
            ['name' => 'Ahli Teknika Tingkat I'],
            ['name' => 'Ahli Teknika Tingkat II'],
            ['name' => 'Ahli Teknika Tingkat III'],
            ['name' => 'Ahli Teknika Tingkat IV'],
            ['name' => 'Ahli Teknika Tingkat V'],
            ['name' => 'Ahli Teknika Tingkat Dasar']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licences');
    }
};
