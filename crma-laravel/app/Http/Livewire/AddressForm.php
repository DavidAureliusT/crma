<?php

namespace App\Http\Livewire;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Livewire\Component;

class AddressForm extends Component
{
    public $crew;

    public $province_id = 0;
    public $regency_id = 0;
    public $district_id = 0;
    public $village_id = 0;

    public function render()
    {
        if (isset($this->crew)) {
            $this->province_id = $this->crew->province_id;
            $this->regency_id = $this->crew->regency_id;
            $this->district_id = $this->crew->district_id;
            $this->village_id = $this->crew->village_id;
        }
        $provinces_list = Province::get();
        $regencies_list = Regency::where("province_id", $this->province_id)->get();
        $districts_list = District::where("regency_id", $this->regency_id)->get();
        $villages_list = Village::where("district_id", $this->district_id)->get();

        return view('livewire.address-form', [
            'provinces' => $provinces_list,
            'regencies' => $regencies_list,
            'districts' => $districts_list,
            'villages'  => $villages_list
        ]);
    }
}
