<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrewCertificate extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    
    /**
     * RELATIONS:
     */
    public function owner()
    {
        return $this->belongsTo(Crew::class);
    }

    public function certificate()
    {
        return $this->belongsTo(Certificate::class);
    }
}
