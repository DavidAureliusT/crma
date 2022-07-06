<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/data/districts.csv"), "r");
  
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            District::create([
                "id" => $data['0'],
                "regency_id" => $data["1"],
                "name" => $data["2"]
            ]);    
        }
   
        fclose($csvFile);
    }
}
