<?php

namespace App\Http\Livewire;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Livewire\Component;

class AddressForm extends Component
{
    public $province_id = 0;
    public $regency_id = 0;
    public $district_id = 0;
    public $village_id = 0;

    public function render()
    {
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
