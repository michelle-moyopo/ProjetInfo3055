<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodPocket extends Model
{
    use HasFactory;

    protected $fillable = ['serial_number', 'blood_group', 'date_prelevement', 'date_peremption'];

    public function bankpockets()
    {
        return $this->hasMany(BankPocket::class);
    }

    public function mouvements()
    {
        return $this->hasMany(Mouvement::class);
    }
}
