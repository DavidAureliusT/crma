<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    /**
     * RELATION:
     */
    public function crew_certificates()
    {
        return $this->hasMany(CrewCertificate::class);
    }
}
