<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mouvement extends Model
{
    use HasFactory;

    protected $fillable = ['blood_bank_id', 'blood_pocket_id', 'type_mouvement', 'date_mouvement'];

    public function bloodbank()
    {
        return $this->belongsTo(BloodBank::class);
    }

    public function bloodpocket()
    {
        return $this->belongsTo(BloodPocket::class);
    }
}
