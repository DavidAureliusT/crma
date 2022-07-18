<?php

namespace App\Http\Livewire;

use App\Models\Certificate;
use Livewire\Component;

class CertificateTableForm extends Component
{
    public $crew;
    public $certificate_count = 1;

    public function increaseCertificate()
    {
        $this->certificate_count ++;
    }
    public function decreaseCertificate()
    {
        $this->certificate_count --;
    }

    public function mount()
    {
        if(isset($this->crew)) {
            $this->certificate_count += $this->crew->certificates->count()-1;
        }
    }

    public function render()
    {
        if(isset($this->crew)) {
            return view('livewire.certificate-table-form', [
                'certificates'  => Certificate::get(),
                'mode'          => "edit"
            ]);
        } else {
            return view('livewire.certificate-table-form', [
                'certificates'  => Certificate::get(),
                'mode'          => "create"
            ]);
        }
    }
}