<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sos extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'user_id','blood_banks_id', 'blood_group', 'address', 'enabled'];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function usersossignals()
    {
        return $this->hasMany(UserSosSignal::class);
    }

    public function bloodbank()
    {
        return $this->belongsTo(BloodBank::class);
    }
}
