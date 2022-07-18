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
        Schema::create('religions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        DB::table('religions')->insert([
            ['name' => 'Islam'],
            ['name' => 'Christian'],
            ['name' => 'Catholic'],
            ['name' => 'Budha'],
            ['name' => 'Hindu'],
            ['name' => 'Konghucu'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('religions');
    }
};
