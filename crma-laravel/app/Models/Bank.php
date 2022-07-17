<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    /**
     * RELATION
     */

    public function crew_bank_accounts()
    {
        return $this->hasMany(CrewBankAccount::class);
    }
}
