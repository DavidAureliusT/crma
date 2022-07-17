<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id','province_id', 'name'
    ];

    /**
     * RELATION
     */

    public function crews()
    {
        $this->hasMany(Crew::class);
    }
}
