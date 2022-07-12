<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FamilyForm extends Component
{
    public $family_count = 1;

    public function decreaseFamilyMember()
    {
        $this->family_count --;
    }
    public function increaseFamilyMember()
    {
        $this->family_count ++;
    }

    public function render()
    {
        return view('livewire.family-form');
    }
}
