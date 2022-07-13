<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'crews';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_card_number';
    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * RELATION:
     */
    public function medical_records()
    {
        return $this->hasMany(MedicalRecord::class, 'id_card_number');
    }
    
    public function licences() 
    {
        return $this->hasMany(CrewLicence::class, 'id_card_number');
    }

    public function certificates()
    {
        return $this->hasMany(CrewCertificate::class, 'id_card_number');
    }

    public function passport()
    {
        return $this->hasOne(Passport::class, 'id_card_number');
    }

    public function bank_account()
    {
        return $this->hasOne(CrewBankAccount::class, 'id_card_number');
    }

    public function blood_type()
    {
        return $this->belongsTo(BloodType::class);
    }

    public function family_members()
    {
        return $this->hasMany(CrewFamilyMember::class, 'id_card_number');
    }
}
