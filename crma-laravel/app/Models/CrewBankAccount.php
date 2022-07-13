<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrewBankAccount extends Model
{
    use HasFactory;
    /**
     * RELATIONS:
     */
    public function owner()
    {
        return $this->belongsTo(Crew::class);
    }
}
