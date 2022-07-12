<?php

namespace App\Http\Livewire;

use App\Models\Licence;
use Livewire\Component;

class LicenceTableForm extends Component
{
    public $licence_count = 1;

    public function increaseLicence()
    {
        $this->licence_count ++;
    }
    public function decreaseLicence()
    {
        $this->licence_count --;
    }

    public function render()
    {
        return view('livewire.licence-table-form',[
            'licences'  => Licence::get()
        ]);
    }
}
