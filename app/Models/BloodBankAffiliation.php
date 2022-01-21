<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodBankAffiliation extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'bank_id', 'enabled'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function blood_banks()
    {
        return $this->belongsTo(BloodBank::class);
    }
}
