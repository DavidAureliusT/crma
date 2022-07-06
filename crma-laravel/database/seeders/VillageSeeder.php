<?php

namespace Database\Seeders;

use App\Models\Village;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('villages')->delete();

        $csvFile = fopen(base_path("database/data/villages.csv"), "r");
  
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            Village::create([
                "id" => $data['0'],
                "district_id" => $data['1'],
                "name" => $data["2"]
            ]);    
        }
   
        fclose($csvFile);
    }
}
