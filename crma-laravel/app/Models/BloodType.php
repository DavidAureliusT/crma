<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodType extends Model
{
    use HasFactory;
    /**
     * RELATIONS:
     */
    public function crews()
    {
        return $this->hasMany(Crew::class);
    }
}
