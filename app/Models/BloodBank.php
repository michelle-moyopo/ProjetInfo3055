<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodBank extends Model
{
    use HasFactory;

    protected $fillable = ['fosas_name', 'contact','district_id','responsable_id','gestionnaire_id', 'enabled'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function mouvements()
    {
        return $this->hasMany(Mouvement::class);
    }

}
