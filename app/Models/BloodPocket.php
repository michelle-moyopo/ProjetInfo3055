<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodPocket extends Model
{
    use HasFactory;

    protected $fillable = ['serial_number', 'duree_vie','blood_group_id','blood_bank_id'];

    public function bloodbank()
    {
        return $this->belongsTo(BloodBank::class);
    }
    public function bloodgroup()
    {
        return $this->belongsTo(BloodGroup::class);
    }
    public function mouvements()
    {
        return $this->hasMany(Mouvement::class);
    }
}
