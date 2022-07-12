<?php

namespace App\Http\Livewire;

use App\Models\Certificate;
use Livewire\Component;

class CertificateTableForm extends Component
{
    public $certificate_count = 1;

    public function increaseCertificate()
    {
        $this->certificate_count ++;
    }
    
    public function decreaseCertificate()
    {
        $this->certificate_count --;
    }

    public function render()
    {
        return view('livewire.certificate-table-form', [
            'certificates'  => Certificate::get(),
        ]);
    }
}