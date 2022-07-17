<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FamilyForm extends Component
{
    public $crew;
    public $family_count = 1;
    public $family_roles = ["Wife", "Husband", "Son", "Daughter"];

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
        if(isset($this->crew)){
            $this->family_count += $this->crew->family_members->count()-1;
            return view('livewire.family-form',[
                'mode'  => 'edit'
            ]);
        } else{
            return view('livewire.family-form', [
                'mode'  => 'create'
            ]);
        } 
    }
}
