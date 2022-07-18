<?php

namespace Database\Seeders;

use App\Models\Regency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/data/regencies.csv"), "r");
  
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            Regency::create([
                "id" => $data['0'],
                "province_id" => $data["1"],
                "name" => $data["2"]
            ]);    
        }
   
        fclose($csvFile);
    }
}
