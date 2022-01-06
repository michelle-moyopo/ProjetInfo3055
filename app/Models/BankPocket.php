<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankPocket extends Model
{
    use HasFactory;

    protected $fillable = ['blood_bank_id', 'blood_pocket_id'];

    public function bloodbank()
    {
        return $this->belongsTo(BloodBank::class);
    }

    public function bloodpocket()
    {
        return $this->belongsTo(BloodPocket::class);
    }
}
