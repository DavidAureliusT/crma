<?php

namespace Database\Seeders;

use App\Models\Crew;
use App\Models\CrewBankAccount;
use App\Models\CrewCertificate;
use App\Models\CrewFamilyMember;
use App\Models\CrewLicence;
use App\Models\MedicalRecord;
use App\Models\Passport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CrewSampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $crew = Crew::create([
            "id_card_number"        => "1111000011110000",
            "fullname"              => "Joshamee Gibbs",
            "gender_id"             => 1,
            "birthdate"             => "2000-03-07",
            "birthplace"            => "North Pacific Ocean",
            "phone_number"          => "081288756632",
            "province_id"           => 11,
            "regency_id"            => 1101,
            "district_id"           => 1101010,
            "village_id"            => 1101010001,
            "postal_code"           => 10555,
            "home_address"          => "North Pacific Ocean",
            "religion_id"           => 5,
            "blood_type_id"         => 5,
            "family_card_number"    => "0123456789123456",
            "npwp_card_number"      => "0123456789123456",
            "bpjstk_number"         => "012345678912",
            "bpjskes_number"        => "0123456789123"
        ]);

        $medical_types = ["mcu", "pcr", "cv1", "cv2", "cv3"];
        foreach($medical_types as $type) {
            MedicalRecord::create([
                "id_card_number"    => "1111000011110000",
                "type"              => $type,
                "release_at"        => "2022-05-05",
                "expired_at"        => "2023-05-05"
            ]);
        }

        for($i = 1; $i <= 3; $i++) {
            CrewLicence::create([
                "id_card_number"    => "1111000011110000",
                "licence_id"        => $i,
                "release_at"        => "2022-05-05",
                "expired_at"        => "2023-05-05"
            ]);
        }

        for($i = 1; $i <= 3; $i++) {
            CrewCertificate::create([
                "id_card_number"    => "1111000011110000",
                "certificate_id"    => $i,
                "release_at"        => "2022-05-05",
                "expired_at"        => "2023-05-05"
            ]);
        }

        Passport::create([
            "id_card_number"    => "1111000011110000",
            "number"            => 010101,
            "release_at"        => "2022-05-05",
            "expired_at"        => "2023-05-05"
        ]);

        CrewBankAccount::create([
            "id_card_number"    => "1111000011110000",
            "bank_code"         => 7,
            "account_number"    => "0123456789",
            "owner_name"        => "JOSHAMEE GIBBS"
        ]);

        $family_roles = ["Wife", "Son"];
        foreach($family_roles as $role){
            CrewFamilyMember::create([
                "id_card_number"    => "1111000011110000",
                "role"              => $role,
                "name"              => $role . " NAME",
                "phone_number"      => "081288756632"
            ]);
        }
    }
}
