<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\BloodType;
use App\Models\Certificate;
use App\Models\Crew;
use App\Models\CrewBankAccount;
use App\Models\CrewCertificate;
use App\Models\CrewFamilyMember;
use App\Models\CrewLicence;
use App\Models\District;
use App\Models\Gender;
use App\Models\Licence;
use App\Models\MedicalRecord;
use App\Models\Passport;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Religion;
use App\Models\Village;
use Illuminate\Http\Request;

class CrewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("crews.index", [
            "crews" => Crew::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("crews.create", [
            'genders'       => Gender::get(),
            'religions'     => Religion::get(),
            'bloodTypes'    => BloodType::get(),
            'banks'         => Bank::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crew = Crew::create([
            "id_card_number"    => $request->id_card_number,
            "fullname"          => $request->fullname,
            "gender_id"         => $request->gender_id,
            "birthdate"         => $request->birthdate,
            "birthplace"        => $request->birthplace,
            "phone_number"      => $request->phone_number,
            "province_id"       => $request->province_id,
            "regency_id"        => $request->regency_id,
            "district_id"       => $request->district_id,
            "village_id"        => $request->village_id,
            "postal_code"       => $request->postal_code,
            "home_address"      => $request->home_address,
            "religion_id"       => $request->religion_id,
            "blood_type_id"     => $request->blood_type_id,
            "family_card_number"=> $request->family_card_number,
            "npwp_card_number"  => $request->npwp_card_number,
            "bpjstk_number"     => $request->bpjstk_number,
            "bpjskes_number"    => $request->bpjskes_number,
        ]);

        $medical_types = ["mcu", "pcr", "cv1", "cv2", "cv3"];
        foreach($medical_types as $type) {
            MedicalRecord::create([
                "id_card_number"    => $request->id_card_number,
                "type"              => $type,
                "release_at"        => $request->medical_records[$type]["release_at"],
                "expired_at"        => $request->medical_records[$type]["expired_at"]
            ]);
        }

        foreach($request->licences as $crew_licence) {
            CrewLicence::create([
                "id_card_number"    => $request->id_card_number,
                "licence_id"        => $crew_licence["licence_id"],
                "release_at"        => $crew_licence["release_at"],
                "expired_at"        => $crew_licence["expired_at"]
            ]);
        }

        foreach($request->certificates as $crew_certificate) {
            CrewCertificate::create([
                "id_card_number"    => $request->id_card_number,
                "certificate_id"    => $crew_certificate["certificate_id"],
                "release_at"        => $crew_certificate["release_at"],
                "expired_at"        => $crew_certificate["expired_at"]
            ]);
        }

        Passport::create([
            "id_card_number"    => $request->id_card_number,
            "number"            => $request->passport["number"],
            "release_at"        => $request->passport["release_at"],
            "expired_at"        => $request->passport["expired_at"]
        ]);

        CrewBankAccount::create([
            "id_card_number"    => $request->id_card_number,
            "bank_code"         => $request->bank["bank_code"],
            "account_number"    => $request->bank["account_number"],
            "owner_name"        => $request->bank["owner_name"]
        ]);

        foreach($request->crew_family_members as $crew_family_member){
            CrewFamilyMember::create([
                "id_card_number"    => $request->id_card_number,
                "role"              => $crew_family_member["role"],
                "name"              => $crew_family_member["name"],
                "phone_number"      => $crew_family_member["phone_number"]
            ]);
        }

        return redirect()->route('crews.show', [$crew->id_card_number]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("crews.show", [
            "crew"  => Crew::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("crews.edit", [
            "crew"          => Crew::find($id),
            'genders'       => Gender::get(),
            'religions'     => Religion::get(),
            'bloodTypes'    => BloodType::get(),
            'banks'         => Bank::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Crew::find($id)->update([
                "fullname"          => $request->fullname,
                "gender_id"         => $request->gender_id,
                "birthdate"         => $request->birthdate,
                "birthplace"        => $request->birthplace,
                "phone_number"      => $request->phone_number,
                "province_id"       => $request->province_id,
                "regency_id"        => $request->regency_id,
                "district_id"       => $request->district_id,
                "village_id"        => $request->village_id,
                "postal_code"       => $request->postal_code,
                "home_address"      => $request->home_address,
                "religion_id"       => $request->religion_id,
                "blood_type_id"     => $request->blood_type_id,
                "family_card_number"=> $request->family_card_number,
                "npwp_card_number"  => $request->npwp_card_number,
                "bpjstk_number"     => $request->bpjstk_number,
                "bpjskes_number"    => $request->bpjskes_number,
        ]);

        foreach($request->medical_records as $type => $medical_record) {
            MedicalRecord
                ::where("id_card_number", $id)
                ->where("type", $type)
                ->first()
                ->update([
                    "release_at" => $medical_record["release_at"],
                    "expired_at" => $medical_record["expired_at"]
                ]);
        }

        foreach($request->licences as $licence) {
            $crew_licence_existed = CrewLicence
                ::where("id_card_number", $id)
                ->where("licence_id", $licence["licence_id"])
                ->first();
            if ($crew_licence_existed == null) {
                CrewLicence::create([
                    "id_card_number"    => $id,
                    "licence_id"        => $licence["licence_id"],
                    "release_at"        => $licence["release_at"],
                    "expired_at"        => $licence["expired_at"],
                ]);
            } else {
                $crew_licence_existed->release_at = $licence["release_at"];
                $crew_licence_existed->release_at = $licence["release_at"];
                $crew_licence_existed->save();
            }
        }
        foreach($request->certificates as $certificate) {
            $crew_certificate_existed = CrewCertificate
                ::where("id_card_number", $id)
                ->where("certificate_id", $certificate["certificate_id"])
                ->first();
            if ($crew_certificate_existed == null) {
                CrewCertificate::create([
                    "id_card_number"    => $id,
                    "certificate_id"    => $certificate["certificate_id"],
                    "release_at"        => $certificate["release_at"],
                    "expired_at"        => $certificate["expired_at"],
                ]);
            } else {
                $crew_certificate_existed->release_at = $certificate["release_at"];
                $crew_certificate_existed->release_at = $certificate["release_at"];
                $crew_certificate_existed->save();
            }
        }

        foreach($request->crew_family_members as $crew_family_member) {
            $crew_family_member_existed = CrewFamilyMember
                ::where("id_card_number", $id)
                ->where("role", $crew_family_member["role"])
                ->first();
            if ($crew_family_member_existed == null) {
                CrewFamilyMember::create([
                    "id_card_number"    => $id,
                    "role"              => $crew_family_member["role"],
                    "name"              => $crew_family_member["name"],
                    "phone_number"      => $crew_family_member["phone_number"]
                ]);
            } else {
                $crew_family_member_existed->name = $crew_family_member["name"];
                $crew_family_member_existed->phone_number = $crew_family_member["phone_number"];
                $crew_family_member_existed->save();
            }
        }

        Passport::firstWhere("id_card_number", $id)->update([
            "number"            => $request->passport["number"],
            "release_at"        => $request->passport["release_at"],
            "expired_at"        => $request->passport["expired_at"]
        ]);

        CrewBankAccount::firstWhere("id_card_number", $id)->update([
            "bank_code"         => $request->bank["bank_code"],
            "account_number"    => $request->bank["account_number"],
            "owner_name"        => $request->bank["owner_name"]
        ]);

        return redirect()->route('crews.show', [$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Crew::destroy($id);
        return redirect()->route('crews.index');
    }
}
