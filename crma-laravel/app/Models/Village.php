<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id','district_id', 'name'
    ];

    /**
     * RELATION
     */

    public function crews()
    {
        $this->hasMany(Crew::class);
    }
}
