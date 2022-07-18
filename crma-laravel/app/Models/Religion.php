<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    use HasFactory;

    /**
     * RELATION
     */

    public function crews()
    {
        $this->hasMany(Crew::class);
    }
}
