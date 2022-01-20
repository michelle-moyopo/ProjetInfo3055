<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sos extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'user_id','blood_bank_id', 'blood_group', 'address', 'enabled'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bloodbank()
    {
        return $this->belongsTo(BloodBank::class);
    }
}
