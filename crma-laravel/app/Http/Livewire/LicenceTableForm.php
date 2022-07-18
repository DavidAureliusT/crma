<?php

namespace App\Http\Livewire;

use App\Models\Licence;
use Livewire\Component;

class LicenceTableForm extends Component
{
    public $crew;
    public $licence_count = 1;

    public function increaseLicence()
    {
        $this->licence_count ++;
    }
    public function decreaseLicence()
    {
        $this->licence_count --;
    }

    public function mount()
    {
        if(isset($this->crew)) {
            $this->licence_count += $this->crew->licences->count()-1;
        }
    }

    public function render()
    {
        if(isset($this->crew)) {
            return view('livewire.licence-table-form', [
                'licences'      => Licence::get(),
                'mode'          => "edit"
            ]);
        } else {
            return view('livewire.licence-table-form', [
                'licences'      => Licence::get(),
                'mode'          => "create"
            ]);
        }
    }
}
