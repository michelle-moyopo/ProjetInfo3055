<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodBankManager extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'blood_bank_id', 'enabled'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bloodbank()
    {
        return $this->belongsTo(BloodBank::class);
    }
}
